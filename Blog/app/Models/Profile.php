<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function getProfile()  {
        return [
            'age' =>25,
            'address' => 'Manila city',
            'phone' => '12345'
        ];
    }

    public function getSomething()  {
        return [
            'age' =>25,
            'address' => 'Manila city',
            'phone' => '12345'
        ];

    }
}
