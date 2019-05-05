<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaladiesPediatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maladies_pediatres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('maladie_id')->unsigned();
            $table->foreign('maladie_id')->references('id')->on('maladies')->onDelete('cascade');

            $table->integer('pediatre_id')->unsigned();
            $table->foreign('pediatre_id')->references('id')->on('pediatres')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maladies_pediatres');
    }
}
