<?php

namespace App\Libraries\HelperTraits;

trait BoilerPlateTrait {

  public static function boiler_plate() {
    $prefix = 'jeffreyway/';
    $folders = [];
    return self::generate_single_series($prefix, $folders);
  }
}
