<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GearboxTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gearbox_types')->insert([
            ['title' => 'Механіка', 'slug' => 'manual'],
            ['title' => 'Автомат', 'slug' => 'automatic'],
            ['title' => 'Варіатор', 'slug' => 'variator'],
        ]);
    }
}
