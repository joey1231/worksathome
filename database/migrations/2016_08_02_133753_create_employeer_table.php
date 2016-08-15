<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeers', function (Blueprint $table) {
            // INT, ID OF THE Customer
            $table->increments('id');
            // STRING, EMAIL OF THE Customer - also username
            $table->string('email')->unique();;
            // Customer's password
            $table->string('password', 60);
            // STRING, NAME OF THE Customer
            $table->string('name');
            // STRING, PRIMARY PHONE NUMBER OF Customer
            $table->string('cellphone')->nullable();
            // STRING, AVATAR URL OF THE CLIENT
            $table->string('avatar')->nullable();//
             // STRING, NAME OF THE Organization
            $table->string('company_name');
            // FLOAT, CURRENT BALANCE
            $table->float('balance');
              // TIMESTAMP, DATE AND TIME WHEN CLIENT WAS DELETED
            $table->softDeletes();
             // TIMESTAMPS, DATE AND TIME WHEN CLIENT WAS CREATED AND LAST UPDATED
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
        Schema::drop('employeers');
    }
}
