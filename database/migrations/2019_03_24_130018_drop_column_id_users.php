<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnIdUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discussions', function (Blueprint $table) {
            $table->dropForeign(['pediatre_id']);
            $table->dropForeign(['admin_id']);
            $table->dropForeign(['mom_id']);
            $table->dropColumn(['pediatre_id', 'admin_id', 'mom_id']);
             $table->addUnique(['pediatre_id', 'admin_id', 'mom_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discussions', function (Blueprint $table) {
            //
        });
    }
}
