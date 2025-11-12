<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get existing customers and products
        $customers = Customer::all();
        $products = Product::all();

        // Create orders with order details
        $customers->each(function ($customer) use ($products) {
            // Create 1-3 orders per customer
            $orderCount = rand(1, 3);

            for ($i = 0; $i < $orderCount; $i++) {
                $order = Order::factory()->create([
                    'customer_id' => $customer->id,
                ]);

                // Add 1-5 order details per order
                $detailCount = rand(1, 5);
                $totalAmount = 0;

                for ($j = 0; $j < $detailCount; $j++) {
                    $product = $products->random();
                    $quantity = rand(1, 10);
                    $unitPrice = $product->unit_price;
                    $subtotal = $quantity * $unitPrice;
                    $totalAmount += $subtotal;

                    OrderDetail::factory()->create([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'quantity' => $quantity,
                        'unit_price' => $unitPrice,
                        'subtotal' => $subtotal,
                    ]);
                }

                // Update order total amount
                $order->update(['total_amount' => $totalAmount]);
            }
        });
    }
}
