<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuimicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quimicas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('acido_urico');
            $table->string('colesterol');
            $table->string('colesterol_hdl');
            $table->string('colesterol_ldl');
            $table->string('creatina');
            $table->string('glicemia');
            $table->string('trigliceridos');
            $table->string('urea');
            $table->string('bilirrubina_t');
            $table->string('bilirrubina_d');
            $table->string('bilirrubina_i');
            $table->string('fosfatasa_alcalina');
            $table->string('fosfatasa_asida');
            $table->string('lipasa');
            $table->string('tgo');
            $table->string('tgp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quimicas');
    }
}
