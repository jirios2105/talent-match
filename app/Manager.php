<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
	

	public function company()

	{
		return $this->belongsTo(Company::class);
	}
}
