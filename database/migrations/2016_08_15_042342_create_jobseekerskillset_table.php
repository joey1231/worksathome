<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerskillsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekerkillset', function (Blueprint $table) {
            // INT, ID OF THE SKILLSET
            $table->increments('id');
            // STRING, NAME of SKILLSET
            $table->string('name')->unique();
            // STRING, rate of SKILLSET 0 is lowest 10 is highest
            $table->integer('rate');
             //int, foreign key job_id
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');
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
        Schema::drop('jobseekerkillset');
    }
}
