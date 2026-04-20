<?php

namespace App\Models;

use DateTimeInterface;
use App\Models\Section;
use App\Traits\ImageTrait;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class BannerSlider extends Model implements HasMedia
{
    use  ImageTrait, InteractsWithMedia;

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'title',
        'sort',
        'description',
        'button_text',
        'button_color',
        'bottom_card_one_title',
        'bottom_card_one_description',
        'bottom_card_two_title',
        'bottom_card_two_description',
        'bottom_card_three_title',
        'bottom_card_three_description',
        'section_id',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('banner_image')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
