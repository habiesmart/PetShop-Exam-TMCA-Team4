<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function ListPet()
    {
        $pets = Pet::all();
        return $pets;
    }

    public function GetPet($id)
    {
        $pets = Pet::Where('id', '==');
        return $pets;
    }
}
