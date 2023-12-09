<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $faker = app(Faker::class);

        return [
            'name' => $faker->word,
            'description' => $faker->sentence(4),
        ];
    }
}
