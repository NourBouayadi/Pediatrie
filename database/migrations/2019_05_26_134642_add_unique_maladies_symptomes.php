<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueMaladiesSymptomes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maladies_symptomes', function (Blueprint $table) {
            $table->unique(['maladie_id', 'symptome_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maladies_symptomes', function (Blueprint $table) {
            //
        });
    }
}
