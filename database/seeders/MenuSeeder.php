<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name'          => 'Home',
                'route_name'    => 'home',
                'slug'          => 'home',
                'sort'          => '1'
            ],
            [
                'name'          => 'About Us',
                'route_name'    => 'aboutus',
                'slug'          => 'about-us',
                'sort'          => '2'
            ],
            [
                'name'          => 'Portfolio',
                'route_name'    => 'portfolio',
                'slug'          => 'portfolio',
                'sort'          => '3'
            ],
            [
                'name'          => 'Packages',
                'route_name'    => 'packages',
                'slug'          => 'packages',
                'sort'          => '4'
            ],
            [
                'name'          => 'Contact Us',
                'route_name'    => 'contactus',
                'slug'          => 'contact-us',
                'sort'          => '5'
            ],
        ];

        Menu::insert($menus);
    }
}
