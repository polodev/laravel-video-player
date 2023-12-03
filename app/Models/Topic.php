<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Topic extends Model
{
	 use HasSlug;
  public function getRouteKey()
  {
    return $this->slug;
  }
  public function getRouteKeyName()
  {
      return 'slug';
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
	protected $guarded = [];
	public function series()
	{
		return $this->belongsToMany(Series::class, 'series_topic');
	}
	public function setTitleAttribute($value)
  {
      $this->attributes['title'] = ucfirst($value);
  }
}
