<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuel_types')->insert([
            ['title' => 'Бензин', 'slug' => 'gas'],
            ['title' => 'Дизель', 'slug' => 'diesel'],
            ['title' => 'Газ', 'slug' => 'gaz'],
        ]);
    }
}
