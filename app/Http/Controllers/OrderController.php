<?php

namespace App\Http\Controllers;

use App\Jobs\CalculateTotalCost;
use Illuminate\Support\Facades\Queue;

class OrderController extends Controller
{

    public function calculateTotalCost()
    {
        $job = new CalculateTotalCost();
        $totalCost = dispatch($job);
    
        echo "El coste total de todas las órdenes es: " . $totalCost;
    
        return response()->json(['message' => 'El trabajo de cálculo se ha despachado correctamente']);
    
    }

}
