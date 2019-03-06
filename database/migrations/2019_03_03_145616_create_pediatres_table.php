<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('description');
            $table->date('date_debut_carriere');
            $table->string('specialite');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('adresse_cabinet');
            $table->double('latitude');
            $table->double('longitude');
            $table->boolean('isActive');
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
        Schema::table('pediatres', function (Blueprint $table) {
            //
        });
    }
}
