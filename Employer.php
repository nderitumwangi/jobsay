<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Employer extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'tel_no','address','company_details','description','password',
    ];


public function blog()
{
    return $this->hasMany(Blog::class);
}
}


