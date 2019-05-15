<?php

namespace App\Libraries;

use App\Libraries\HelperTraits\SerieTrait;
use App\Libraries\HelperTraits\TopicTrait;

class Helper {
	use TopicTrait;
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


}
