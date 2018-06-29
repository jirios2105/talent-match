<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class University extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'full_name', 'enrollment',
    ];

    
	public function students(){
		retuen $this->hasMany(Student::class);
	}
}
