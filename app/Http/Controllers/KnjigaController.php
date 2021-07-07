<?php

namespace App\Http\Controllers;

use App\Iznajmljivanje;
use App\Knjiga;
use Illuminate\Http\Request;

class KnjigaController extends Controller
{
    public function getovanje_knjiga()
    {
        $knjige = Knjiga::all();
        return response()->json(['knjige' => $knjige], 200);
    }

    public function brisanje_knjiga(Request $request){
        $knjiga = Knjiga::find($request->id_knjiga);
        $knjiga->delete();
        
            return response()->json(['message'=>'Uspesno obrisana knjiga'], 200);
    }
}
