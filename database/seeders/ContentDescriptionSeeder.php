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
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 1,
                'title'             => 'Title Two',
                'slug'              => 'title-two',
                'description'       => 'Description Two',
                'sort'              => '2',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 1,
                'title'             => 'Title Three',
                'slug'              => 'title-three',
                'description'       => 'Description Three',
                'sort'              => '3',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 2,
                'title'             => 'Cloud sharing',
                'slug'              => 'cloud-sharing',
                'description'       => 'Description ThreeAltera integre suavitate per an, alienum phaedrum te sea. ',
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 2,
                'title'             => '42',
                'slug'              => 'forty_two',
                'description'       => 'Quidam officiis',
                'sort'              => '2',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 2,
                'title'             => '73',
                'slug'              => 'seventy-three',
                'description'       => 'Deseruisse definitionem',
                'sort'              => '3',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 2,
                'title'             => '99',
                'slug'              => 'ninety-nine',
                'description'       => 'Ea eos essent',
                'sort'              => '4',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 2,
                'title'             => '03',
                'slug'              => 'zero-three',
                'description'       => 'Ornatus percipit',
                'sort'              => '5',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 3,
                'title'             => 'Services we can help you with',
                'slug'              => 'services-we-can-help-you-with',
                'description'       => '',
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 3,
                'title'             => 'Quality',
                'slug'              => 'quality',
                'description'       => 'Quidam officiis similique sea ei, vel tollit indoctum efficiendi nihil tantas platonem eos. ',
                'sort'              => '2',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 3,
                'title'             => 'Helpful',
                'slug'              => 'helpful',
                'description'       => 'Deseruisse definitionem his et, an has veri integre abhorreant, nam alii epicurei et.',
                'sort'              => '3',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 4,
                'title'             => 'Let’s work together',
                'slug'              => 'together',
                'description'       => 'Contact us',
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Crew',
                'slug'              => 'crew',
                'description'       => 'Quidam officiis similique sea ei, vel tollit indoctum efficiendi ei, at nihil tantas platonem eos. ',
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Sebastian Bennett',
                'slug'              => 'sebastian-bennett',
                'description'       => 'Founder',
                'sort'              => '2',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Graham Griffiths',
                'slug'              => 'graham-griffiths',
                'description'       => 'Manager',
                'sort'              => '3',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Monica Böttger',
                'slug'              => 'monica-böttger',
                'description'       => 'Designer',
                'sort'              => '4',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Leon Hunt',
                'slug'              => 'leon-hunt',
                'description'       => 'Developer',
                'sort'              => '5',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 5,
                'title'             => 'Our Team',
                'slug'              => 'our-team',
                'description'       => '',
                'sort'              => '6',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Our news',
                'slug'              => 'our-news',
                'description'       => '',
                'sort'              => '1',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Future of customer support',
                'slug'              => 'future-of-customer-support',
                'description'       => '20 august 2019',
                'sort'              => '2',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Digital trends in next 2020',
                'slug'              => 'digital-trends-in-next-2020',
                'description'       => '18 august 2019',
                'sort'              => '3',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'New iPhone leaked',
                'slug'              => 'new-iphone-leaked',
                'description'       => '15 august 2019',
                'sort'              => '4',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'iPhone has a new feature',
                'slug'              => 'iphone-has-a-new-feature',
                'description'       => '14 august 2019',
                'sort'              => '5',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Business meeting ',
                'slug'              => 'business-meeting',
                'description'       => '13 august 2019',
                'sort'              => '6',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Never giving up ',
                'slug'              => 'never-giving-up',
                'description'       => '11 august 2019',
                'sort'              => '7',
                'featured_image'    => '',
            ],
            [
                'section_id'        => 6,
                'title'             => 'Our News',
                'slug'              => 'our-news',
                'description'       => '',
                'sort'              => '8',
                'featured_image'    => '',
            ],
        ];

        ContentDescription::insert($content_descriptions);
    }
}
