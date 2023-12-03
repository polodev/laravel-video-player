<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Video extends Model
{
    public function getRouteKey()
    {
      return $this->slug;
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

	protected $guarded = [];
	public function series()
	{
		return $this->belongsTo(Series::class, 'series_id');
	}
 //for adding avatar_url
	// able to access full_path_with_prefix
	// Or FullPathWithPrefix
  public function getFullPathWithPrefixAttribute() {
  	$path_name = $this->path_name;
    return "file://" . $path_name;
  }

  public function video_index($all_videos) {

  	$videos = $all_videos->toArray();
  	foreach($videos as $key => $video) {
  		if ($video['id'] === $this->id) {
  			return $key;
  		}
  	}
  	return 0;
  }

}
