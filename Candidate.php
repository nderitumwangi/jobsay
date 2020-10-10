<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Candidate extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'tel_no','address','description','password',
    ];

}


