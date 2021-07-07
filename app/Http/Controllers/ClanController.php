<?php

namespace App\Http\Controllers;

use App\Clan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    public function dodavanje_novog_clana(Request $request)
    {
        $id_clana = Clan::insertGetId([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'kontakt_telefon' => $request->kontakt_telefon,
            'lozinka' => $request->lozinka,
            'datum_pridruzivanja' => Carbon::today(),
        ]);
        if ($id_clana)
            return response()->json(['message' => 'Uspesna registracija.', 'id_clana' => $id_clana], 200);
        return response()->json(['message' => 'Greska.'], 200);
    }
    
    public function identifikacija_clana(Request $request)
    {
        $clan = Clan::where('kontakt_telefon', $request->kontakt_telefon)->where('lozinka', $request->lozinka)->first();
        if ($clan)
            return response()->json(['message' => 'Uspesna identifikacija.', 'id_clana' => $clan->id], 200);
        return response()->json(['message' => 'Ne postoji korisnik sa ovim telefonom i ovom lozinkom.'], 200);
    }
}
