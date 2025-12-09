<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // Table name is USERINFO
    protected $table = 'USERINFO';


    // Disable auto-increment if USERID is not auto-incrementing
    public $incrementing = false;

    // Disable timestamps (created_at, updated_at)
    public $timestamps = false;
}
