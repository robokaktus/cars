<?php

namespace Database\Factories\Car;

use App\Models\Car\FuelEconomy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FuelEconomy>
 */
class FuelEconomyFactory extends Factory
{
    protected $model = FuelEconomy::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sale_id' => null,
            'city_fuel_economy' => fake()->randomDigit(),
            'road_fuel_economy' => fake()->randomDigit(),
            'mix_fuel_economy' => fake()->randomDigit()
        ];
    }
}
