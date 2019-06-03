<?php

namespace App\Libraries\HelperTraits;

trait ManualTrait {

  public static function manual_one_by_one() {

    $folders = [

      [ '/wdata/tutorial/others/youtube', [37,]],


    ];

    $folders = self::set_main_id($folders, [38]);
    return self::generate_single_series_manual($folders);
  }
  public static function linux_academy()
  {
    $prefix = '/home/polo/Videos/tuts/Linux-academy/';
    $folders = [
      [ 'Linux Academy Nginx And The LEMP Stack', [12, 47,] ],
      [ 'Linux Academy - NGINX Web Server Deep Dive', [12, 47,] ],
      [ 'Linux Academy Red Hat Certified Systems Administrator Prep Course', [12, 47,] ],
      [ 'Linux Academy - Using the EC2 Container Service', [12, 47,] ],
    ];
    $folders = array_map(function ($folder) use($prefix) {
      return [$prefix . $folder[0], $folder[1]];
    }, $folders);

    $folders = self::set_main_id($folders, [38]);
    return self::generate_single_series_manual($folders);
  }
  public static function manual() {
    return array_merge(
      self::manual_one_by_one(),
      self::linux_academy(),
    );
  }

}
