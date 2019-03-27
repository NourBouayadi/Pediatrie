<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePediatreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pediatres', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('description');
            $table->date('date_debut_carriere');
            $table->string('specialite');
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('adresse_cabinet');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pediatres');
    }
}
