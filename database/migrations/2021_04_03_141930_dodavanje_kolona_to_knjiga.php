<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DodavanjeKolonaToKnjiga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('knjiga', function (Blueprint $table) {
            $table->string("autor");
            $table->string("naslov");
            $table->integer("broj_strana");
            $table->string("zanr");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('knjiga', function (Blueprint $table) {
            //
        });
    }
}
