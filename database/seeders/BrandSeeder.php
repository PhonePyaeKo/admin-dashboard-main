<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Brand A', 'slug' => 'brand-a'],
            ['name' => 'Brand B', 'slug' => 'brand-b'],
            ['name' => 'Brand C', 'slug' => 'brand-c'],
            ['name' => 'Brand D', 'slug' => 'brand-d'],
            ['name' => 'Brand E', 'slug' => 'brand-e'],
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::create($brand);
        }
    }
}
