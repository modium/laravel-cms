<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdIsActiveToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->integer('role_id')->index()->unsigned()->nullable(); // so user can be related to roles table
            $table->integer('is_active')->default(0); // take priveleges from user
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function($table) {
            $table->dropColumn('role_id');
            $table->dropColumn('is_active');
        });
    }
}
