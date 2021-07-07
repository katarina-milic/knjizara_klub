<?php

use App\Iznajmica;
use App\Iznajmljivanje;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IznajmljivanjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 40; $i++) { 
            Iznajmljivanje::insert([
                'id_knjiga'=>rand(1,100),
                'id_clan'=>rand(2,16),
                'datum_iznajmljivanja' => Carbon::today()->subDays(rand(1,1000))
            ]);
        }
    }
}
