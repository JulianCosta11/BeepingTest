<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Order::factory(20)->create();
    }
}