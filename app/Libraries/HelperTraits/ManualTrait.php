<?php

namespace App\Libraries\HelperTraits;

trait ManualTrait {

  public static function manual_one_by_one() {
    $prefix = '';
    $folders = [];
    return self::generate_single_series($prefix, $folders, true);
  }
  public static function manual() {
    return array_merge(
      self::manual_one_by_one(),
    );
  }

}
