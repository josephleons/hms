<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public $fillable = ['name'];
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}