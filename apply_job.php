<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class apply_job extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_id', 'job_id',
    ];
}
