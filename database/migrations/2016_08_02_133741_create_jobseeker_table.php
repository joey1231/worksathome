<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('jobseekers', function (Blueprint $table) {
            // INT, ID OF THE JOBSEEKER
            $table->increments('id');
            // STRING, EMAIL OF THE JOBSEEKER - also username
            $table->string('email')->unique();;
            // }}'s password
            $table->string('password', 60);
            // STRING, FIRST OF THE JOBSEEKER
            $table->string('first_name');
             // STRING, COUNTRY OF THE JOBSEEKER
            $table->string('country');
            // String, COUNTRY CODE OF THE JobSeeker
            $table->string('country_code');
            // STRING, LAST NAME OF THE JOBSEEKER
            $table->string('last_name');
            // STRING, LAST NAME OF THE JOBSEEKER
            $table->string('source');
            // STRING, PRIMARY PHONE NUMBER OF JOBSEEKER
            $table->string('cellphone')->nullable();
            // STRING, AVATAR URL OF THE CLIENT
            $table->string('avatar')->nullable();
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
        Schema::drop('jobseekers');
    }
}
