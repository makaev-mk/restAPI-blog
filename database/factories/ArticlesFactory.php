<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'body' => $this->faker->text(200),
            'image' => $this->faker->image('public/storage', 640, 480, null, false),
            'likes' => $this->faker->numberBetween(0, 30),
            'views' => $this->faker->numberBetween(0, 50),
            'created_at' => $this->faker->dateTimeBetween('-3 month','now +1 month')
        ];
    }
}


