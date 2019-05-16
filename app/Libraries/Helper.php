<?php

namespace App\Libraries;

use App\Libraries\HelperTraits\CodeCourseTrait;
use App\Libraries\HelperTraits\JeffreyWayTrait;
use App\Libraries\HelperTraits\LyndaTrait;
use App\Libraries\HelperTraits\OtherssTrait;
use App\Libraries\HelperTraits\TopicTrait;
use App\Libraries\HelperTraits\UdemyTrait;

class Helper {
	use TopicTrait;
  use JeffreyWayTrait;
  use LyndaTrait;
  use UdemyTrait;
  use CodeCourseTrait;
  use OtherssTrait;
	public static function series(){
		$jeffrey_way  = self::jeffrey_way();
		$code_course  = self::code_course();
		$lynda        = self::lynda();
		$udemy        = self::udemy();
    $others        = self::others();
		return array_merge($jeffrey_way, $code_course, $lynda, $udemy);
	}

	public static function generate_single_series_original($prefix, $folders) {
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

  public static function generate_single_series($prefix, $folders)
  {

    $tuts_folder = '';
    if (config('app.tuts_folder')) {
      $tuts_folder = config('app.tuts_folder');
    }
    $series = array_map(function ($folder) use($prefix, $tuts_folder) {
      return [
        'title'    => $folder[0],
        'url'      => $tuts_folder . $prefix . $folder[0],
        'topic_ids' => $folder[1],
      ];

    }, $folders);
    return $series;
  }


}
