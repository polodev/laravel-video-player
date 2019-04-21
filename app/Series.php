<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
	protected $guarded = [];
	public function topics()
	{
		return $this->belongsToMany(Topic::class, 'series_topic');
	}
	public function videos()
	{
		return $this->hasMany(Video::class, 'series_id');
	}
}
