<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(500),
            'price' => $this->faker->randomFloat(2, 0, 200),
            'availability_start' => now(),
            'availability_end' => now()->add(rand(0, 15), 'day'),
            'always_available' => false,
        ];
    }
}
