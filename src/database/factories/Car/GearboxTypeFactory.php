<?php

namespace Database\Factories\Car;

use App\Models\Car\GearboxType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<GearboxType>
 */
class GearboxTypeFactory extends Factory
{
    protected $model = GearboxType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->realText(10);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph
        ];
    }
}
