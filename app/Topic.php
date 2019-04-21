<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $guarded = [];
	public function series()
	{
		return $this->belongsToMany(Series::class, 'series_topic');
	}
}
