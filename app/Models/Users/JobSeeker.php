<?php

namespace App\Models\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class JobSeeker extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	// STRING, EMAIL OF THE JOBSEEKER - also username
           'email',
            // }}'s password
           'password',
            // STRING, FIRST OF THE JOBSEEKER
            'first_name',
             // STRING, COUNTRY OF THE JOBSEEKER
            'country',
            // String, COUNTRY CODE OF THE JobSeeker
            'country_code',
            // STRING, LAST NAME OF THE JOBSEEKER
            'last_name',
            // STRING, LAST NAME OF THE JOBSEEKER
            'source',
            // STRING, PRIMARY PHONE NUMBER OF JOBSEEKER
            'cellphone',
            // STRING, AVATAR URL OF THE CLIENT
            'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
