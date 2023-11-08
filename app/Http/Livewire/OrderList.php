<?php 

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderList extends Component
{
    public $orders;

    public function render()
    {
        $this->orders = Order::all();
        return view('livewire.order-list');
    }
}