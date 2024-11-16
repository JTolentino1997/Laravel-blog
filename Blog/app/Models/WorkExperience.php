<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{

    protected $fillable = [
        'company',
        'start_date',
        'end_date',
        'role'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
