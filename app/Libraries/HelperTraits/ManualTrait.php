<?php

namespace App\Libraries\HelperTraits;

trait ManualTrait {

  public static function manual_one_by_one() {

    $folders = [

      [ '/wdata/tutorial/others/youtube', [37,]],


    ];

    $folders = self::set_main_id($folders, 38);
    return self::generate_single_series_manual($folders);
  }
  public static function manual() {
    return array_merge(
      self::manual_one_by_one(),
    );
  }

}
