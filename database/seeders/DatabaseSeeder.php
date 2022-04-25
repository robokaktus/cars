<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BrandsSeeder::class,
            ModelsSeeder::class,
            PaintsSeeder::class,
            PaintTypesSeeder::class,
            PaintConditionsSeeder::class,
            BodyTypesSeeder::class,
            TechnicalConditionsSeeder::class,
            FeaturesSeeder::class
        ]);
    }
}
