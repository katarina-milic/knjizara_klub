<?php

use App\Clan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clan::insert([
            'ime' => 'admin',
            'prezime' => 'admin',
            'kontakt_telefon' => '1234',
            'lozinka' => 'admin',
            'datum_pridruzivanja' => Carbon::today()
        ]); 
        for ($i=0; $i < 15; $i++) { 
            Clan::insert([
                'ime' => $this->generisanjeImena(),
                'prezime' => $this->generisanjePrezimena(),
                'kontakt_telefon' => $this->generisanjeBrojaTelefona(),
                'lozinka' => Str::random(5),
                'datum_pridruzivanja' => Carbon::today()
            ]);
        }
    }

    public function generisanjeImena(){
        $imena = [
            'Milica',
            'Jelena',
            'Marko',
            'Mihailo',
            'Marija',
            'Teodora',
            'Nikola',
            'Dusan',
            'Isidora',
            'Dusica'
        ];
        $broj = rand(1,count($imena));
        return $imena[$broj-1];
        
    }
    public function generisanjePrezimena(){
        $prezimena = [
            'Milivojevic',
            'Jankovic',
            'Markovic',
            'Mihailovic',
            'Marjanovic',
            'Todorovic',
            'Nikolic',
            'Dusanovljevic',
            'Prevretovic',
            'Boskovic'
        ];
        $broj = rand(1,count($prezimena));
        
        return $prezimena[$broj-1];

    }

    public function generisanjeBrojaTelefona(){
        return '06'.rand(0,9) . ' ' .rand(0,9).rand(0,9).rand(0,9). ' '.rand(0,9).rand(0,9).' '. rand(0,9). rand(0,9);
    }
}
