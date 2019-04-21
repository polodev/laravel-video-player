<?php 

namespace App\Libraries;

use App\Libraries\HelperTraits\MacSerieTrait;
use App\Libraries\HelperTraits\TopicTrait;

class Helper {
	use TopicTrait;
	use MacSerieTrait;
	public static function series(){
		$jeffreyway = self::generate_jeffrey_way_mac();
		return array_merge($jeffreyway);
	}


}