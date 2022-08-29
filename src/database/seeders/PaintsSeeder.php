<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paints')->insert([
            ['title' => 'Red', 'slug' => 'red', 'color_code' => 'FF0000'],
            ['title' => 'Green', 'slug' => 'green', 'color_code' => '008000'],
            ['title' => 'Blue', 'slug' => 'blue', 'color_code' => '0000FF'],
        ]);
    }
}
