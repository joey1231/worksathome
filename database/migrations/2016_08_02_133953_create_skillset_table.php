<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skillset', function (Blueprint $table) {
            // INT, ID OF THE SKILLSET
            $table->increments('id');
            // STRING, NAME of SKILLSET
            $table->string('name')->unique();
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
        Schema::drop('skillset');
    }
}
