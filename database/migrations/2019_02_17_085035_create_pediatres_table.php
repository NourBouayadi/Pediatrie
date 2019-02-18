<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePediatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pediatres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pseudo');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('description');
            $table->date('date_debut_carriere');
            $table->string('specialite');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('adresse_cabinet');
            $table->rememberToken();
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
        Schema::drop('pediatres');
    }
}
