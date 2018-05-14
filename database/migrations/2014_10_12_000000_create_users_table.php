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
            $table->increments('id')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('address')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('gender');
            $table->integer('age');
            $table->string('email',100)->unique();
            $table->string('birthdate');
            $table->string('paymentcard')->nullable();
            $table->string('roles')->default('user');
            $table->string('password');
            $table->string('profilepic')->nullable();
            $table->boolean('dealer_approve')->default('0');
            $table->string('shopname',100)->unique()->nullable();
            $table->double('defaultdev')->nullable();
            $table->double('freeshipwhenprice')->nullable();
            $table->double('couponwhenprice')->nullable();
            $table->string('codegiftwhenprice')->nullable();
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