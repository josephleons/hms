<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   public $fillable = ['user_id'];
   public function appointments()
   {
      return $this->hasOne(Appointment::class);
   }

   public function user (){
      return $this->belongsTo(User::class);
   }
}