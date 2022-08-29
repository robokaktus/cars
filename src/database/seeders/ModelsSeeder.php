<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'brand_id' => 1,
                'title' => '530',
                'slug' => '530',
                'started_at' => '2000-12-12',
                'ended_at' => '2010-12-12',
                'priority' => 100
            ],
            [
                'brand_id' => 1,
                'title' => '430',
                'slug' => '430',
                'started_at' => '2001-12-12',
                'ended_at' => '2011-12-12',
                'priority' => 90
            ],
            [
                'brand_id' => 1,
                'title' => '330',
                'slug' => '330',
                'started_at' => '2002-12-12',
                'ended_at' => '2012-12-12',
                'priority' => 80
            ],
        ]);
    }
}
