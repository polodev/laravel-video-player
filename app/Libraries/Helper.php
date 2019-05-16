<?php

namespace App\Libraries;

use App\Libraries\HelperTraits\CodeCourseTrait;
use App\Libraries\HelperTraits\JeffreyWayTrait;
use App\Libraries\HelperTraits\LyndaTrait;
use App\Libraries\HelperTraits\ManualTrait;
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
  use ManualTrait;
	public static function series(){
		return array_merge(
      self::jeffrey_way(),
      self::lynda(),
      self::udemy(),
      self::code_course(),
      self::others(),
      self::other_vendors(),
      self::manual_one_by_one(),
    );
	}

	public static function generate_single_series_original($prefix, $folders) {
    $tuts_folder = config('app.tuts_folder');
		$series = array_map(function ($folder) use($prefix, $tuts_folder) {
      return [
        'title'    => $folder['short_url'],
        'url'      => $tuts_folder . $prefix . $folder['short_url'],
        'topic_ids' => $folder['topic_ids'],
      ];

		}, $folders);
		return $series;
	}

  // for appending main id
  public static function set_main_id($folders, $manual_id) {
     $return_folders = array_map(function ($folder) use($manual_id) {
      if ( !in_array($manual_id, $folder[1]) ) {
        $folder[1][] = $manual_id;
      }
      return $folder;
    }, $folders);
    return $return_folders;
  }

  public static function generate_single_series($prefix, $folders)
  {
    $tuts_folder = config('app.tuts_folder');
    $series = array_map(function ($folder) use($prefix, $tuts_folder) {
      return [
        'title'    => $folder[0],
        'url'      => $tuts_folder . $prefix . $folder[0],
        'topic_ids' => $folder[1],
      ];

    }, $folders);
    return $series;
  }
  public static function generate_single_series_manual($folders)
  {
    $series = array_map(function ($folder) {
      $title = trim($folder[0], '/');
      $title_explode = explode('/', $title);
      $title = end($title_explode);
      return [
        'title'    => $title,
        'url'      => $folder[0],
        'topic_ids' => $folder[1],
      ];

    }, $folders);
    return $series;
  }


}
