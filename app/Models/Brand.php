<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Brand extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory, ImageTrait, InteractsWithMedia;

    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('brand_image')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
