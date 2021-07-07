<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DodavanjeKolonaToIznajmljivanje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iznajmljivanje', function (Blueprint $table) {
            $table->date('datum_iznajmljivanja');
            $table->unsignedBigInteger('id_clan')->nullable();
            $table->foreign('id_clan')->references('id')->on('clan')->onDelete('cascade');;
            $table->unsignedBigInteger('id_knjiga')->nullable();
            $table->foreign('id_knjiga')->references('id')->on('knjiga')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('iznajmljivanje', function (Blueprint $table) {
            $table->dropForeign(['id_clan']);
            $table->dropForeign(['id_knjiga']);
        });
    }
}
