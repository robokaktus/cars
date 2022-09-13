<?php

namespace Database\Factories\Car;

use App\Models\Car\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Model>
 */
class ModelFactory extends Factory
{
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->realText(10);

        return [
            'brand_id' => null,
            'parent_id' => null,
            'title' => $title,
            'slug' => Str::slug($title),
            'started_at' => fake()->date,
            'ended_at' => fake()->date,
            'priority' => fake()->randomDigit()
        ];
    }
}
