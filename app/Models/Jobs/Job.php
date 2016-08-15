<?php

namespace App\Models\Jobs;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	// INT, ID OF THE jobs
            'id',
            // TEXT, Jobs Title on jobs
            'title',
            // TEXT, description on jobs
            'description',
            // string, Salary on jobs
           'salary',
            // tinyInt, Job Type 0 - freelance, 1 - Fulltime
           'job_type',
            //int, foreign key employeer_id
            'employeer_id',
    ];
}
