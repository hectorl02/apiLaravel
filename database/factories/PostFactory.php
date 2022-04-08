<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'=>rand(1,10),// 10 usuarios al azar
            'title'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
            'city'=>$this->faker->word,
            'content'=>$this->faker->text(800)//800 caracteres
        ];
    }
}
