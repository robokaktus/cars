<?php

namespace Database\Factories\Paint;

use App\Models\Paint\Paint;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Paint>
 */
class PaintFactory extends Factory
{
    protected $model = Paint::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->colorName;

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'color_code' => fake()->hexColor
        ];
    }
}
