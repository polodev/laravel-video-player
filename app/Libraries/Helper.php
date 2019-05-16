<?php

namespace App\Libraries;

use App\Libraries\HelperTraits\CodeCourseTrait;
use App\Libraries\HelperTraits\JeffreyWayTrait;
use App\Libraries\HelperTraits\LyndaTrait;
use App\Libraries\HelperTraits\OtherVendorsTrait;
use App\Libraries\HelperTraits\OthersTrait;
use App\Libraries\HelperTraits\TopicTrait;
use App\Libraries\HelperTraits\UdemyTrait;

class Helper {
	use TopicTrait;
  use JeffreyWayTrait;
  use LyndaTrait;
  use UdemyTrait;
  use CodeCourseTrait;
  use OthersTrait;
  use OtherVendorsTrait;
	public static function series(){
		return array_merge(
      self::jeffrey_way(),
      self::lynda(),
      self::udemy(),
      self::code_course(),
      self::others(),
      self::other_vendors(),
    );
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
