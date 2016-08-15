<?php

namespace App\Models\Experiences;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'company',
            // string, Company Name.
           'role',
            // timestamp, starting date
           'starting_date',
            // timestamp, end date
            'end_date',
             // string, file location for image snippet
           'end_date',
             //int, foreign key job_id
            'jobseeker_id',
    ];
}
