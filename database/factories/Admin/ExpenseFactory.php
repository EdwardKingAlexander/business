<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'expense' => $this->faker->word,
            'amount' => $this->faker->randomFloat(2, 1, 100),
            'entry_date' => $this->faker->date(),
            'description' => $this->faker->text,
            'user_id' => 20,
            'expense_category_id' => 1,
        ];
    }
}
