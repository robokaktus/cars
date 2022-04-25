<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaintTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paint_types')->insert([
            ['title' => 'Матовий', 'slug' => 'matovii'],
            ['title' => 'Глянець', 'slug' => 'glianec']
        ]);
    }
}
