<?php

namespace Database\Factories\Sale;

use App\Models\Car\DriveType;
use App\Models\Car\FuelType;
use App\Models\Car\GearboxType;
use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Sale\Preference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Preference>
 */
class PreferenceFactory extends Factory
{

    protected $model = Preference::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sale_id' => null,
            'description' => fake()->paragraph,
            'paint_id' => Paint::inRandomOrder()->first()->id,
            'paint_type_id' => Condition::inRandomOrder()->first()->id,
            'paint_condition_id' => Condition::inRandomOrder()->first()->id,
            'technical_condition_id' => TechnicalCondition::inRandomOrder()->first()->id,
            'fuel_type_id' => FuelType::inRandomOrder()->first()->id,
            'gearbox_type_id' => GearboxType::inRandomOrder()->first()->id,
            'drive_type_id' => DriveType::inRandomOrder()->first()->id,
            'delivered_from_iso' => null,
            'is_cleared_through_customs' => fake()->boolean,
            'is_traded' => fake()->boolean,
            'is_exchanged' => fake()->boolean
        ];
    }
}
