<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function Index()
    {
        return view('Pet.index');
    }
    
    public function ListPet()
    {
        $pets = Pet::all();
        $data = [
            'status' => true,
            'message' => 'success',
            'data' => $pets
        ];

        return response()->json($data);
    }

    public function GetPet($id)
    {
        $pets = Pet::Where('id', '==');
        return $pets;
    }

    public function Save(Request $request)
    {
        $pet = [
            "name" => $request->input('name'),
            "born" => $request->input('born'),
            "jenis_hewan" => $request->input('jenis_hewan'),
            "aboutme" => $request->input('aboutme'),
        ];
        
        Pet::create($pet);
        return redirect()->to('pet');
    }

    public function Delete($id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect()->to('pet');
    }
}
