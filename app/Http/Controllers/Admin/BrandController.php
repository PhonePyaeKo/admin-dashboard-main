<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\common;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Section;
use App\Repositories\BrandRepository;
use App\Repositories\Interfaces\BrandRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BrandController extends Controller
{
    public $brandRepository;
    public $sections;

    public function __construct(BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
        $this->sections = Section::all();
    }

    // This is Brand Index
    public function index()
    {
        abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $brands = $this->brandRepository->all();
        return view('admin.brands.index', compact('brands'));
    }

    //Show
    public function show(Brand $brand)
    {
        abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $fields = Arr::except($brand->getAttributes(), ['id', 'deleted_at', 'created_at', 'updated_at']);

        // $custom_fields = [
        //     'section_id' => $contentdescription->section->name
        // ];
        // foreach ($custom_fields as $key => $value) {
        //     $fields[$key] = $value;
        // }

        $redirect_route = route('admin.brands.index');
        $label = 'brand';

        return view('admin.common.show', compact('label', 'fields', 'redirect_route'));
    }

    // Create
    public function create()
    {
        abort_if(Gate::denies('brand_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sections = $this->sections;
        return view('admin.brands.create', compact('sections'));
    }

    //Store
    public function store(Request $request)
    {
        $this->brandRepository->store($request->all());
        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
    }

    //edit
    public function edit(Brand $brand)
    {
        abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $sections = $this->sections;
        return view('admin.brands.edit', compact('brand', 'sections'));
    }

    //update
    public function update(Request $request, Brand $brand)
    {
        $this->brandRepository->update($request->all(), $brand);
        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
    }

    //store media
    public function storeMedia(Request $request)
    {
        $path = storage_path('uploads/temp/brand/' . Auth::id());
        $file = $request->file('file');
        $response = common::storeMedia($path, $file);

        return $response;
    }

    //remove media
    public function removeMedia(Request $request)
    {
        $type = $request->type;
        $brand = Brand::find($request->id);
        $status = false;
        if ($type == 'brand_image') {
            $mediaItem = $brand->getMedia('brand_image')->first();
            if ($mediaItem) {
                $mediaItem->delete();
                $status = true;
            }
        }
        return response()->json([
            'status' => $status,
            'type' => $type,
        ]);
    }

    //destory
    public function destroy(Brand $brand)
    {
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->brandRepository->forceDelete($brand);
        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
    }
}
