<?php

namespace Database\Seeders;

use App\Models\BannerSlider;
use Illuminate\Database\Seeder;

class BannerSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bannerSliders = [
            [
                'section_id'        => 1,
                'name'              => 'Banner Slider',
                'title'             => 'Take Advantage',
                'description'       => 'Tristique et egestas quis ipsum suspendisse ultrices gravida. Ut tellus elementum sagittis vitae et leo duis ut diam. Vel quam elementum pulvinar etiam non quam. Enim eu turpis egestas pretium.',
                'button_text'       => 'Take It',
                'button_color'       => '#FD5545',
                'bottom_card_one_title'       => 'Venenatis lectus',
                'bottom_card_one_description'       => 'Faucibus purus in massa tempor. Vitae congue eu consequat ac felis donec et odio.',
                'bottom_card_two_title'       => 'Feugiat vivamus',
                'bottom_card_two_description'       => 'Purus in massa tempor. Vitae congue eu consequat ac felis donec et odio.',
                'bottom_card_three_title'       => 'Semper auctor',
                'bottom_card_three_description'       => 'In massa tempor. Vitae congue eu consequat ac felis donec et odio.',
                'sort'              => '1',
            ],
        ];

        BannerSlider::insert($bannerSliders);
    }
}
