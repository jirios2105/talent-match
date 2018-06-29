<?php

namespace App;

use App\Vacant;
use App\Manager;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{



	public function vacants()
	{
		return $this->hasMany(Vacant::class);
	}

	public function managers()
	{

		return $this->hasMany(Manager::class);  
	}
}
