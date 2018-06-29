<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
class Role extends Model
{

protected $fillable = [
        'name', 'display_name', 'description',
    ];

	public function users()
	{
		return $this->hasMany(User::class); 
	}
}
