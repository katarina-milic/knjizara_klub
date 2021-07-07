<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PromenaImenaTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('knjigas', 'knjiga');
        Schema::rename('clans', 'clan');
        Schema::rename('iznajmicas', 'iznajmljivanje');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('knjiga', 'knjigas');
        Schema::rename('clan', 'clans');
        Schema::rename('iznajmljivanje', 'iznajmicas');
    }
}
