<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $guarded = [];
	public function series()
	{
		return $this->hasMany(Series::class);
	}
}
