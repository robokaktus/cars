<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriveTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drive_types')->insert([
            ['title' => 'Передній', 'slug' => 'front'],
            ['title' => 'Задній', 'slug' => 'rear'],
            ['title' => 'Повних', 'slug' => 'full'],
        ]);
    }
}
