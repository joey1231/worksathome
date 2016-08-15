<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            // INT, ID OF THE experiences
            $table->increments('id');
            // string, Company Name
            $table->string('company');
            // string, Company Name.
            $table->string('role');
            // timestamp, starting date
            $table->timestamp('starting_date');
            // timestamp, end date
            $table->timestamp('end_date');
            
             //int, foreign key job_id
            $table->integer('jobseeker_id')->unsigned();
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('experiences');
    }
}
