<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MyImage>
 */
class MyImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(),
            'description'=> $this->faker->realText(),
            'image'=> $this->faker->imageUrl(600,300, null, false),
        ];
    }
}
