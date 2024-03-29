<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Series extends Model
{
	use HasSlug;
	protected $guarded = [];
	public function getRouteKey()
	{
	    return $this->slug;
	}
	public function getRouteKeyName()
	{
	    return 'slug';
	}
	public function topics()
	{
		return $this->belongsToMany(Topic::class, 'series_topic');
	}
	public function videos()
	{
		return $this->hasMany(Video::class, 'series_id');
	}

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
