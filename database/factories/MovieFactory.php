<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(10),
            'image_url' => $this->faker->imageUrl(),
            'published_year' => $this->faker->year(),
            'is_showing' => $this->faker->boolean(),
            'description' => $this->faker->realText(100),
            'genre_id' => Genre::factory(),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => $this->faker->dateTimeThisYear(),
        ];
    }
}
