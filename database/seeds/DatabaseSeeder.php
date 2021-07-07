<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClanTableSeeder::class);
        $this->call(KnjigaTableSeeder::class);
        $this->call(IznajmljivanjeTableSeeder::class);
    }
}
