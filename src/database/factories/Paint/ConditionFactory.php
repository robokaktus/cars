<?php

namespace Database\Factories\Paint;

use App\Models\Paint\Condition;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Condition>
 */
class ConditionFactory extends Factory
{
    protected $model = Condition::class;

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
