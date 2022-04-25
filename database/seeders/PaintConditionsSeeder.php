<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaintConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paint_conditions')->insert([
            ['title' => 'Сильно поцарапаний', 'slug' => 'bad'],
            ['title' => 'Маленькі царапини', 'slug' => 'normal'],
            ['title' => 'Як із заводу', 'slug' => 'good'],
        ]);
    }
}
