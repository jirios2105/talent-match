<?php

namespace App;
use App\Student;
use App\Vacant;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    public function student()
    {
    	return $this->hasOne(Student::class);

    	# code...
    }

    public function vacants()
    {

    	return $this->belongsToMany(Vacant::class);
    	# code...
    }
}
