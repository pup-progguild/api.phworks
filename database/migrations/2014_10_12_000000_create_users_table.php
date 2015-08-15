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
            $table->increments('user_id');
            $table->integer('field_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->string('contact');
            $table->integer('citycode');
            $table->integer('provcode');
            $table->string('profile_summary');
            $table->enum('role', ['client', 'employee']);
            $table->string('tags')->default('[]');
            $table->float('rating');
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
