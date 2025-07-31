<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $fillable = [
        'patient_id',
        'doctor_id',
        'description',
        'dateTo',
        'dateFrom',
        'state_id'
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}