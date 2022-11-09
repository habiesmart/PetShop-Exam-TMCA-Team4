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

    public function Save(Request $request)
    {
        $orders = [
            "nama_pemesan" => $request->input('nama_pemesan'),
            "pets_name" => $request->input('pets_name'),
            "pet_id" => $request->input('pet_id'),
            "paket_perawatan_id" => $request->input('paket_perawatan_id'),
            "book_at" => $request->input('book_at'),
        ];
        
        RegistrasiPerawatans::create($orders);
        return redirect()->to('order-list');
    }
}
