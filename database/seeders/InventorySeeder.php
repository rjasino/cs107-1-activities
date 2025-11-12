<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all existing products
        $products = Product::all();

        // Create inventory record for each product
        $products->each(function ($product) {
            Inventory::factory()->create([
                'product_id' => $product->id,
            ]);
        });

        // Optionally create some low stock items (20% of products)
        $lowStockCount = (int) ($products->count() * 0.2);
        $lowStockProducts = $products->random(min($lowStockCount, $products->count()));

        $lowStockProducts->each(function ($product) {
            $inventory = Inventory::where('product_id', $product->id)->first();
            if ($inventory) {
                $inventory->update([
                    'quantity_in_stock' => rand(0, $inventory->reorder_level),
                ]);
            }
        });
    }
}
