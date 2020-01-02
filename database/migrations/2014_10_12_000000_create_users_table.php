<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('location');
            $table->string('company');
            $table->string('im');
            $table->string('im_account');
            $table->integer('phone')->nullable();
            $table->string('website');
            $table->boolean('terms_condition')->default(0);
           
            $table->string('email')->unique();
            $table->enum('role',['publisher', 'advertiser','admin'])->default('publisher');
           
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
