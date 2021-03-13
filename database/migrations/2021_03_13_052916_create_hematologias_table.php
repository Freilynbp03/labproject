<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHematologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematologias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('tip');
            $table->string('eritro');
            $table->string('sangria');
            $table->string('cuagulacion');
            $table->string('falcemia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hematologias');
    }
}
