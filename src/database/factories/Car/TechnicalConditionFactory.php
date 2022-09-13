<?php

namespace Database\Factories\Car;

use App\Models\Car\TechnicalCondition;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<TechnicalCondition>
 */
class TechnicalConditionFactory extends Factory
{
    protected $model = TechnicalCondition::class;

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
            'short_title' => fake()->title,
            'description' => fake()->paragraph
        ];
    }
}
