<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('jobs', function (Blueprint $table) {
            // INT, ID OF THE jobs
            $table->increments('id');
            // TEXT, Jobs Title on jobs
            $table->text('title');
            // TEXT, description on jobs
            $table->text('description');
            // string, Salary on jobs
            $table->string('salary');
            // tinyInt, Job Type 0 - freelance, 1 - Fulltime
            $table->tinyInteger('job_type');
            //int, foreign key employeer_id
            $table->integer('employeer_id')->unsigned();
            $table->foreign('employeer_id')->references('id')->on('employeers');
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
        Schema::drop('jobs');
    }
}
