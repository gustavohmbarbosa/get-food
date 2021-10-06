<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::Factory(),
            'food_id' => Food::Factory(),
            'description' => $this->faker->sentence(6, true),
            'choice_date' => $this->faker->dateTimeBetween('now', '30 days'),
            'status' => $this->faker->randomElement(['PG', 'NP', 'RE', 'NR']),
        ];
    }
}
