<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodyTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('body_types')->insert([
            ['title' => 'Седан', 'slug' => 'sedan'],
            ['title' => 'Купе', 'slug' => 'coupe'],
            ['title' => 'Хетчбек', 'slug' => 'hetchback'],
        ]);
    }
}
