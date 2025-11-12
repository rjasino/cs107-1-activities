<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
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
        $quantityInStock = $this->faker->numberBetween(0, 500);
        $reorderLevel = $this->faker->numberBetween(5, 50);
        $maxStockLevel = $this->faker->numberBetween($reorderLevel + 50, 1000);

        return [
            'product_id' => Product::factory(),
            'quantity_in_stock' => $quantityInStock,
            'reorder_level' => $reorderLevel,
            'maximum_stock_level' => $maxStockLevel,
            'location' => $this->faker->optional()->randomElement([
                'Warehouse A - Aisle 1',
                'Warehouse A - Aisle 2',
                'Warehouse B - Aisle 1',
                'Warehouse B - Aisle 2',
                'Storage Room 1',
                'Storage Room 2',
            ]),
        ];
    }

    /**
     * Indicate that the inventory is low stock.
     */
    public function lowStock(): static
    {
        return $this->state(fn(array $attributes) => [
            'quantity_in_stock' => $this->faker->numberBetween(0, $attributes['reorder_level']),
        ]);
    }

    /**
     * Indicate that the inventory is out of stock.
     */
    public function outOfStock(): static
    {
        return $this->state(fn(array $attributes) => [
            'quantity_in_stock' => 0,
        ]);
    }
}
