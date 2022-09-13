<?php

namespace Database\Seeders;

use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\DriveType;
use App\Models\Car\Feature;
use App\Models\Car\FuelType;
use App\Models\Car\GearboxType;
use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
use App\Models\Sale\Sale;
use App\Models\User;
use Illuminate\Database\Seeder;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        Brand::factory()->count(10)->create();
        BodyType::factory()->count(10)->create();
        DriveType::factory()->count(10)->create();
        Feature::factory()->count(15)->create();
        FuelType::factory()->count(10)->create();
        GearboxType::factory()->count(10)->create();
        TechnicalCondition::factory()->count(10)->create();
        Condition::factory()->count(10)->create();
        Type::factory()->count(10)->create();
        Paint::factory()->count(10)->create();
        Sale::factory()->count(30)->create();
    }
}
