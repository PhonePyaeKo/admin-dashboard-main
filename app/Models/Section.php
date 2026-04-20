<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Section extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'menu_id',
        'slug',
        'type',
        'sort',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function content_descriptions()
    {
        return $this->hasMany(ContentDescription::class);
    }

    public function bannerslider()
    {
        return $this->hasMany(BannerSlider::class);
    }

    protected static array $moduleMap = [
        'bannerslider' => 'Banner Slider',
        'content_descriptions' => 'Content Description',
    ];

    public function getAvailableModules(): array
    {
        $modules = [];

        foreach (self::$moduleMap as $relation => $label) {
            if ($this->$relation()->exists()) {
                $modules[] = $label;
            }
        }

        return $modules;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('section_image')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);

        $this->addMediaCollection('section_images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }
}
