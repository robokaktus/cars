<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            ['title' => 'Шкіряний салон', 'slug' => 'leather'],
            ['title' => 'Мультируль', 'slug' => 'multirule'],
            ['title' => 'Парктроніки', 'slug' => 'parktroniki'],
        ]);
    }
}
