<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DodavanjeKolonaToClan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clan', function (Blueprint $table) {
            $table->string("ime");
            $table->string("prezime");
            $table->string("kontakt_telefon")->unique();
            $table->string("lozinka");
            $table->date("datum_pridruzivanja");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clan', function (Blueprint $table) {
            //
        });
    }
}
