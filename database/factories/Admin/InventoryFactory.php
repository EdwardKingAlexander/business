<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => $this->faker->numberBetween(125546, 485135),
            'manuifacturer' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'cost_price' => $this->faker->randomFloat(2, 1, 100),
            'sell_price' => $this->faker->randomFloat(2, 1, 100),
            'unit_of_measure' => $this->faker->word,
            'attributes' => json_encode([
                'color' => $this->faker->colorName,
                'size' => $this->faker->randomElement(['small', 'medium', 'large']),
            ]),
            'user_id' => 1,
            'category_id' =>1,
            'vendor_id' => 1,
            'location' => $this->faker->word,
            'description' => $this->faker->text,
            'business_id' => 1,
            'po_number' => $this->faker->numberBetween(125546, 485135),
            'minimum_order' => $this->faker->randomFloat(2, 1, 100),
            'platforms_selling_on' => $this->faker->randomElement(['Etsy', 'Ebay', 'Amazon']),
            'last_sold' => $this->faker->date(),

        ];
    }
}
