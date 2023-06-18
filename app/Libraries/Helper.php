<?php

namespace App\Libraries;


class Helper {
  static function getVideoIndex($all_videos, $source_video)
  {
    $videos = $all_videos->toArray();
    foreach($videos as $key => $video) {
      if ($video['id'] === $source_video->id) {
        return $key + 1;
      }
    }
    return 0;
  }


}
