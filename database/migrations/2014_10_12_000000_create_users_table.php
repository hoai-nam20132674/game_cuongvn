<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sdt')->unique();
            $table->string('password', 60);
            $table->string('g500k');
            $table->string('g200k');
            $table->string('baoda');
            $table->string('cocsac');
            $table->string('mockhoa');
            $table->string('tainghe');
            $table->string('freeship');
            $table->string('goodluck');
            $table->string('phanthuong');
            $table->integer('status');
            $table->integer('role');
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
        Schema::drop('users');
    }
}
