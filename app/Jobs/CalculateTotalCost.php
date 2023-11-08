<?php 

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Models\Order;


class CalculateTotalCost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $totalCost = Order::join('order_lines', 'orders.id', '=', 'order_lines.order_id')
        ->join('products', 'order_lines.product_id', '=', 'products.id')
        ->sum('order_lines.qty * products.cost');
        return $totalCost;
    }

    
}