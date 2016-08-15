<?php

namespace App\Models\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Employeer extends Authenticatable
{
     protected $fillable = [
        	// STRING, EMAIL OF THE Customer - also username
           'email',
            // Customer's password
           'password',
            // STRING, NAME OF THE Customer
            'name',
            // STRING, PRIMARY PHONE NUMBER OF Customer
            'cellphone',
            // STRING, AVATAR URL OF THE CLIENT
            'avatar',
             // STRING, NAME OF THE Organization
            'company_name',
            // FLOAT, CURRENT BALANCE
            'balance',
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
