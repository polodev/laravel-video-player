<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	protected $guarded = [];
	public function series()
	{
		return $this->belongsTo(Series::class);
	}
}
