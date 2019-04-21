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
			return array_merge($jeffrey_way, $code_course);
		}

		return [];
	}

	public static function generate_single_series($prefix, $folders) {
		$series = array_map(function ($folder) use($prefix) {
			return [
				'title'    => $folder['short_url'],
				'url'      => $prefix . $folder['short_url'],
				'topic_id' => $folder['topic_id'],
			];
		}, $folders);
		return $series;
	}


}