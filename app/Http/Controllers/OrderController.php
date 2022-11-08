<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegistrasiPerawatans;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {
        $orders = RegistrasiPerawatans::all();
        return view('Order.orderIndex', [
            "orders" => $orders
        ]);
    }
}
