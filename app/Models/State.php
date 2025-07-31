<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public $table = 'state';
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
}