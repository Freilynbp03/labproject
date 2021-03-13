<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serologias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vdrl');
            $table->string('aso');
            $table->string('pcr');
            $table->string('gestatest');
            $table->string('covid');
            $table->string('fotoplasmosis');
            $table->string('factor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serologias');
    }
}
