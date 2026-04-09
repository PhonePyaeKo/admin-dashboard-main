<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class BrandRepository implements BrandRepositoryInterface
{
    public function all(): Collection
    {
        return Brand::latest()->get();
    }

    public function find($id)
    {
        return $this->all()->find($id);
    }

    public function store($data)
    {
        DB::beginTransaction();
        try {
            $brandImages = $data['brand_image'] ?? [];
            unset($data['brand_image']);
            $brand = Brand::create($data);
            DB::commit();

            // Attach media after commit
            $tempFolder = storage_path('uploads/temp/brand/' . Auth::id());
            foreach ((array) $brandImages as $file) {
                $filePath = $tempFolder . '/' . $file;
                if (is_file($filePath)) {
                    try {
                        $brand->addMedia($filePath)->toMediaCollection('brand_image');
                    } catch (\Exception $e) {
                        Log::warning("Failed to attach media: {$filePath}", [
                            'error' => $e->getMessage(),
                            'brand_id' => $brand->id,
                        ]);
                    }
                }
            }

            return $brand;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Brand creation failed', [
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }

    public function update($data, $brand)
    {
        try {
            DB::beginTransaction();
            if (isset($data['brand_image']) && is_array($data['brand_image'])) {
                foreach ($data['brand_image'] as $fileName) {
                    $tempPath = storage_path('uploads/temp/brand/' . Auth::id() . '/' . $fileName);
                    if (file_exists($tempPath)) {
                        try {
                            $brand->addMedia($tempPath)->toMediaCollection('brand_image');
                            if (file_exists($tempPath)) {
                                unlink($tempPath);
                            }
                        } catch (\Exception $e) {
                            Log::error("Failed to add media file: {$tempPath}", [
                                'error' => $e->getMessage(),
                                'brand_id' => $brand->id,
                            ]);
                        }
                    } else {
                        // For multiple images, just skip if not found in temp, but log for traceability
                        Log::warning("Brand image file not found in temp directory: {$tempPath}", [
                            'brand_id' => $brand->id,
                            'file_name' => $fileName,
                        ]);
                    }
                }
                $tempFolder = storage_path('uploads/temp/brand/' . Auth::id());
                if (File::exists($tempFolder) && count(File::files($tempFolder)) === 0) {
                    File::deleteDirectory($tempFolder);
                }
            }
            unset($data['brand_image']);
            $brand->update($data);
            DB::commit();
        } catch (\Exception $e) {
            Log::error('Brand update failed', [
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }

    public function forceDelete($section)
    {
        try {
            $section->forceDelete();
        } catch (\Exception $e) {
            Log::error('Brand deletion failed', [
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }
}
