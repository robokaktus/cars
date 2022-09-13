<?php

namespace Database\Factories\Car;

use App\Models\Car\BodyType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<BodyType>
 */
class BodyTypeFactory extends Factory
{
    protected $model = BodyType::class;

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
