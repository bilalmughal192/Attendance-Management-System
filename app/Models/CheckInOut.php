<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckInOut extends Model
{

    // Set the actual table name
    protected $table = 'CHECKINOUT';
    
    protected $primaryKey = null;
    public $incrementing = false;

    // Disable timestamps if not present (created_at, updated_at)
    public $timestamps = false;

    // Optional: Cast CHECKTIME as a Carbon instance
    protected $casts = [
        'CHECKTIME' => 'datetime',
    ];
}


