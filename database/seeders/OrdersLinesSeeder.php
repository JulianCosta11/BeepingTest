<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersLinesSeeder extends Seeder
{
    public function run()
    {
        $order = \App\Models\Order::inRandomOrder()->first() ?? \App\Models\Order::factory()->create();
        $product = \App\Models\Order::inRandomOrder()->first() ?? \App\Models\Product::factory()->create();
        \App\Models\OrderLine::factory(20)->create([
            'order_id' => $order->id,
            'product_id' => $product->id,
        ]);
    }
}