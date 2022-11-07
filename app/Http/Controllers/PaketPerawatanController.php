<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketPerawatan;
use App\Http\Controllers\Controller;

class PaketPerawatanController extends Controller
{
    public function index() {
        $pakets = PaketPerawatan::all();
        return view('Paket.paket-perawatan', [
            "pakets" => $pakets
        ]);
    }
}
