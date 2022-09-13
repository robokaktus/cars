<?php

namespace Database\Factories\Car;

use App\Models\Car\Brand;
use App\Models\Car\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;

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
            'foundation_year' => fake()->date,
            'country_iso' => Brand::inRandomOrder()->first()->iso2,
            'priority' => fake()->randomDigit()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Brand $brand) {
            Model::factory()
                ->state(['brand_id' => $brand->id])
                ->count(10)
                ->create();
        });
    }
}
