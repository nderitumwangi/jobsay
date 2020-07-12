<?php

namespace App;
use App\Admin;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable = [
        'subject', 'post', 'image',  'register_id'
    ];

   /* public function comments()
    {
        return $this->hasMany(Comment::class);
    }
*/
    public function register()
    {
        return $this->belongsTo(Employer::class, "register_id") ;
           /* $this->belongsTo(Candidate::class, "register_id");*/
    }

    public function login()
    {
        return $this->belongsTo(Admin::class, "login_id");
    }

}


