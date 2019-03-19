<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->integer('mom_id')->unsigned();
            $table->foreign('mom_id')->references('id')->on('moms')->onDelete('cascade');
            $table->integer('discussion_id')->unsigned();
            $table->foreign('discussion_id')->references('id')->on('discussions')->onDelete('cascade');
            $table->primary(['mom_id', 'discussion_id']);
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
        Schema::dropIfExists('favoris');
    }
}
