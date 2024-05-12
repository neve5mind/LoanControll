<?php

namespace Database\Factories;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(1000, 100000),
            'interest_rate' => $this->faker->randomFloat(2, 5, 25),
            'term' => $this->faker->numberBetween(12, 60),
            'issued_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}