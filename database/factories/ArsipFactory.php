<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArsipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'user_id' => 1,
            'name'=> $this->faker->sentence(3),
            'deskripsi'=> $this->faker->sentence(3),
            'sifat'=> 'public',
            'file' => 'jpg',
        ];
    }
}
