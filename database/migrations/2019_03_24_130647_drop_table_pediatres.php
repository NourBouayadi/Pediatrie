<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTablePediatres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favoris', function (Blueprint $table) {$table->dropForeign(['mom_id']);
        });
        Schema::drop('mom_password_resets');
        Schema::drop('pediatre_password_resets');
        Schema::drop('admin_password_resets');
        Schema::drop('pediatres');
        Schema::drop('admins');
        Schema::drop('moms');



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
