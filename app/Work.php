<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
			'user_id',
			'project_name',
			'project_description',
			'department_name',
			'work',
			'budget',
			'data',
			'e-mail',
	];
	
}
