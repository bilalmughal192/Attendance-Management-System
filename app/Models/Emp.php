<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    protected $fillable=[
        'name','father_name','dob','doj','cnic',
        'ph','email','gender','desg_name',
        'dept_name','status',
        ];

    
}
