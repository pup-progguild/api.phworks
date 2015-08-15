<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->integer('field_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->string('email')->unique();
            $table->string('contact');
            $table->integer('citycode');
            $table->integer('provcode');
            $table->string('career_summary');
            $table->string('role')->default('employee');
            $table->string('tags');
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
        Schema::drop('employee');
    }
}
