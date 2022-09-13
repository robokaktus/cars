<?php

namespace Database\Factories\Car;

use App\Models\Car\Crash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Crash>
 */
class CrashFactory extends Factory
{
    protected $model = Crash::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sale_id' => null,
            'is_front_crash' => fake()->boolean,
            'is_rear_crash' => fake()->boolean,
            'is_top_crash' => fake()->boolean,
            'is_left_crash' => fake()->boolean,
            'is_right_crash' => fake()->boolean,
            'description' => fake()->paragraph
        ];
    }
}
