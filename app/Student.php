<?php

namespace App;
use App\University;
use App\Curriculum;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   public function university()

   {
   	return $this->belongsTo(University::class);
   	# code...
   }

   public function curriculum()
   {
   	return $this->belongsTo(Curriculum::class);
   	# code...
   }
}
