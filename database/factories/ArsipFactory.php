<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'category_id' => 2,
            'user_id' => 2,
            'name'=> $this->faker->sentence(3),
            'sifat'=> 'private',
            'deskripsi'=> $this->faker->sentence(3),
            'sifat'=> 'public',
            'file' => 'jpg',
        ];
    }
}
