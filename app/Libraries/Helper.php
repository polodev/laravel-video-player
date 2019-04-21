<?php 

namespace App\Libraries;

use App\Libraries\HelperTraits\MacSerieTrait;
use App\Libraries\HelperTraits\TopicTrait;

class Helper {
	use TopicTrait;
	use MacSerieTrait;
	public static function series(){
		if( config( 'app.machine' )  == 'mac' ) {
			$jeffrey_way  = self::jeffrey_way_mac();
			$code_course  = self::code_course_mac();
			$lynda        = self::lynda_mac();
			$udemy        = self::udemy_mac();
			return array_merge($jeffrey_way, $code_course, $lynda, $udemy);
		}

		return [];
	}

	public static function generate_single_series($prefix, $folders) {
		$series = array_map(function ($folder) use($prefix) {
			return [
				'title'    => $folder['short_url'],
				'url'      => $prefix . $folder['short_url'],
				'topic_ids' => $folder['topic_ids'],
			];
		}, $folders);
		return $series;
	}


}