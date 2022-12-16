<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_no');
            $table->string('cnic_no');
            $table->date('dob');
            $table->integer('street_id');
            $table->integer('city_id');
            $table->integer('location_id');
            $table->integer('province_id');
            $table->integer('role_id')->default('1');
            $table->integer('devie_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->foreign('user_id')->references('user_id')->on('devices');
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
