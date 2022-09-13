<?php

namespace Database\Factories\Sale;

use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\Crash;
use App\Models\Car\Feature;
use App\Models\Car\FuelEconomy;
use App\Models\Car\Model;
use App\Models\Sale\Preference;
use App\Models\Sale\Sale;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nnjeim\World\Models\City;

/**
 * @extends Factory<Sale>
 */
class SaleFactory extends Factory
{

    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'model_id' => Model::inRandomOrder()->first()->id,
            'body_type_id' => BodyType::inRandomOrder()->first()->id,
            'price' => fake()->randomDigit(),
            'old_price' => fake()->randomDigit(),
            'manufactured_at' => fake()->year,
            'version' => fake()->title,
            'state_number' => fake()->title,
            'vin_number' => fake()->title,
            'is_hide_state_number' => fake()->boolean,
            'is_hide_vin_number' => fake()->boolean,
            'city_id' => City::inRandomOrder()->first()->id,
            'engine_capacity' => fake()->randomFloat(5.0),
            'horsepower' => fake()->randomDigit(),
            'mileage' => fake()->randomDigit(),
            'phone_number' => fake()->randomDigit(),
            'telegram' => fake()->userName,
            'email' => fake()->email,
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Sale $sale) {
            Preference::factory()->state([
                'sale_id' => $sale->id,
            ])->create();

            Crash::factory()->state([
                'sale_id' => $sale->id,
            ])->create();

            FuelEconomy::factory()->state([
                'sale_id' => $sale->id,
            ])->create();

            $sale->features()->attach(Feature::take(random_int(1, 10))->pluck('id'));
        });
    }
}
