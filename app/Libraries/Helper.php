<?php

namespace App\Libraries;

use App\Libraries\HelperTraits\JeffreyWayTrait;
use App\Libraries\HelperTraits\SerieTrait;
use App\Libraries\HelperTraits\TopicTrait;

class Helper {
	use TopicTrait;
  use JeffreyWayTrait;
  use SerieTrait;
	public static function series(){
		$jeffrey_way  = self::jeffrey_way();
		$code_course  = self::code_course();
		$lynda        = self::lynda();
		$udemy        = self::udemy();
		return array_merge($jeffrey_way, $code_course, $lynda, $udemy);
	}

	public static function generate_single_series($prefix, $folders) {
    $tuts_folder = '';
    if (config('app.tuts_folder')) {
      $tuts_folder = config('app.tuts_folder');
    }
		$series = array_map(function ($folder) use($prefix, $tuts_folder) {
      return [
        'title'    => $folder['short_url'],
        'url'      => $tuts_folder . $prefix . $folder['short_url'],
        'topic_ids' => $folder['topic_ids'],
      ];

		}, $folders);
		return $series;
	}

  public function generate_single_series_from_only_url($prefix, $files, $topics=[])
  {

    $tuts_folder = '';
    if (config('app.tuts_folder')) {
      $tuts_folder = config('app.tuts_folder');
    }
    $series = array_map(function ($url_last_portion) use($prefix, $tuts_folder, $topics) {
      return [
        'title'    => $url_last_portion,
        'url'      => $tuts_folder . $prefix . $url_last_portion,
        'topic_ids' => $topics,
      ];

    }, $folders);
    return $series;
  }


}
