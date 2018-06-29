<?php

namespace App;
use App\Curriculum;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    
    public function curriculum()
    {

    	return $this->hasMany(Curriculum::class);

    	# code...
    }

    public function company()
    {
    	return $this->belongsTo(Company::class);
    	# code...
    }
}
