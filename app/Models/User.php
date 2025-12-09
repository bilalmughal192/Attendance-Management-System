<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class User extends Authenticatable
{
    use HasFactory, Notifiable;


    // Custom primary key
    protected $primaryKey = 'user_id';

    // Fields that can be mass-assigned
    protected $fillable = [
    'user_id','name','father_name',
    'ph','doj','email','desg_name',
    'dept_name','password','rights',
    ];
    public function getAuthIdentifierName()
    {
        return 'id';
    }
}
