<?php

namespace Database\Seeders;

use App\Models\Car\Brand;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'title' => 'BMW',
            'slug' => 'bmw',
            'foundation_year' => '1990-12-12',
            'country_iso' => 'DE',
            'priority' => 1000
        ]);
    }
}
