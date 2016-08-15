<?php

namespace App\Models\Skills;

use Illuminate\Database\Eloquent\Model;

class JobsSkillSet extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'name','job_id'
    ];
}
