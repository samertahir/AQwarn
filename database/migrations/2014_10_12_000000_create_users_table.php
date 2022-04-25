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
            $table->id();
            $table->integer('User_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact_no');
            $table->string('CNIC_no');
            $table->date('DoB');
            $table->integer('Role_id');
            $table->integer('Device_id');
            $table->string('Street_address');
            $table->string('City');
            $table->string('location');
            $table->string('Province');
            $table->timestamp('email_verified_at')->nullable();

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
