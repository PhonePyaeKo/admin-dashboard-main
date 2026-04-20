<?php

namespace Database\Seeders;

use App\Models\ContentDescription;
use Illuminate\Database\Seeder;

class ContentDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content_descriptions = [
            [

                'section_id'        => 1,
                'title'             => 'Title One',
                'slug'              => 'title-one',
                'description'       => 'Description One',
                'sort'              => '1'
            ],
            [
                'section_id'        => 1,
                'title'             => 'Title Two',
                'slug'              => 'title-two',
                'description'       => 'Description Two',
                'sort'              => '2'
            ],
            [
                'section_id'        => 1,
                'title'             => 'Title Three',
                'slug'              => 'title-three',
                'description'       => 'Description Three',
                'sort'              => '3'
            ],
            [
                'section_id'        => 2,
                'title'             => 'Cloud sharing',
                'slug'              => 'cloud-sharing',
                'description'       => 'Description ThreeAltera integre suavitate per an, alienum phaedrum te sea. ',
                'sort'              => '1'
            ],
            [
                'section_id'        => 2,
                'title'             => '42',
                'slug'              => 'forty_two',
                'description'       => 'Quidam officiis',
                'sort'              => '2'
            ],
            [
                'section_id'        => 2,
                'title'             => '73',
                'slug'              => 'seventy-three',
                'description'       => 'Deseruisse definitionem',
                'sort'              => '3'
            ],
            [
                'section_id'        => 2,
                'title'             => '99',
                'slug'              => 'ninety-nine',
                'description'       => 'Ea eos essent',
                'sort'              => '4'
            ],
            [
                'section_id'        => 2,
                'title'             => '03',
                'slug'              => 'zero-three',
                'description'       => 'Ornatus percipit',
                'sort'              => '5'
            ],
        ];

        ContentDescription::insert($content_descriptions);
    }
}
