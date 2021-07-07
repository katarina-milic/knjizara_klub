<?php

use App\Knjiga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KnjigaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Knjiga::insert([
                'autor' => $this->generisanjeAutora(),
                'naslov' => Str::random(7),
                'broj_strana' => rand(33, 750),
                'zanr' => $this->generisanjeZanra()
            ]);
        }
    }

    public function generisanjeImena()
    {
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
        $broj = rand(1, count($imena));

        return $imena[$broj-1];
    }
    public function generisanjePrezimena()
    {
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
        $broj = rand(1, count($prezimena));

        return $prezimena[$broj-1];
    }

    public function generisanjeAutora()
    {
        return $this->generisanjeImena() . " " . $this->generisanjePrezimena();
    }
    public function generisanjeZanra()
    {
        $zanrovi = [
            'Drama',
            'Komedija',
            'Akcija',
            'Roman',
        ];
        $broj = rand(1, count($zanrovi));

        return $zanrovi[$broj-1];
    }
}
