<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'task' => $this->faker->word,
            'description' => $this->faker->text,
            'due_date' => $this->faker->date(),
            'user_id' => 1,
            'category_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['Not Started', 'In Progress', 'Completed']),
        ];
    }
}
