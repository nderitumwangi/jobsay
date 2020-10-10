<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'employer_id','company_name', 'company_website', 'company_email','job_category',
        'company_logo','job_title','job_type','job_salary','job_location','job_description'
    ];

    public function aplications()
    {
        return $this->hasMany(Application::class);
    }

}
