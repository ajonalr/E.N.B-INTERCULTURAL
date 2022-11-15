<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curos', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('grado_id')->unsigned();
            $table->foreign('grado_id')->references('id')->on('grado'); 

            $table->string('nombre');
            $table->double('maximo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curos');
    }
}
