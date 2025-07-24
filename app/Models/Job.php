<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   public $fillable = [
      'title',
      'department',
      'location',
      'salary',
      'score',
      'resume_score',
      'state_id'
   ];
   public function applications()
   {
      return $this->hasMany(Application::class);
   }
   public function state()
   {
      return $this->belongsTo(State::class);
   }
}