<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
	protected $guarded = [];
	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}
	public function videos()
	{
		return $this->hasMany(Video::class);
	}
}
