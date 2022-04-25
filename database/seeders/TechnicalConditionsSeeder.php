<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnicalConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technical_conditions')->insert([
            ['title' => 'Як після армагедону', 'slug' => 'bad'],
            ['title' => 'Комфортне для їзди', 'slug' => 'normal'],
            ['title' => 'Як із заводу', 'slug' => 'good'],
        ]);
    }
}
