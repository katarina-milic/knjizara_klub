<?php

namespace App\Http\Controllers;

use App\Iznajmljivanje;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IznajmljivanjeController extends Controller
{
    public function dodavanje_iznajmljivanja(Request $request)
    {
        if (!$request->id_clan)
            return response()->json(['message' => 'Niste ulogovani!'], 200);

        $iznajmljivanje = Iznajmljivanje::insertGetId([
            'datum_iznajmljivanja' => Carbon::today(),
            'id_knjiga' => $request->id_knjiga,
            'id_clan' => $request->id_clan,
        ]);
        return response()->json(['message' => 'Iznajmili ste knjigu. Vas identifikator je: #' . $iznajmljivanje], 200);
    }
}
