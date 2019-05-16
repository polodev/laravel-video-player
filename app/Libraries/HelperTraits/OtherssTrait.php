<?php

namespace App\Libraries\HelperTraits;

trait OtherssTrait {

  public static function others() {
    $prefix = 'jeffreyway/';
    $folders = [];
    return self::generate_single_series($prefix, $folders);
  }
}
