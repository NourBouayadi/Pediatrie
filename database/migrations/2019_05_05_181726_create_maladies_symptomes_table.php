<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaladiesSymptomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maladies_symptomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maladie_id')->unsigned();
            $table->foreign('maladie_id')->references('id')->on('maladies')->onDelete('cascade');

            $table->integer('symptome_id')->unsigned();
            $table->foreign('symptome_id')->references('id')->on('symptomes')->onDelete('cascade');



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
        Schema::dropIfExists('maladies_symptomes');
    }
}
