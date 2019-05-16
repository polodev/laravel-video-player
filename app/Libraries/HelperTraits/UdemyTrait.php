<?php

namespace App\Libraries\HelperTraits;

trait UdemyTrait {

  public static function udemy() {
    $prefix = 'jeffreyway/';
    $folders = [];
    return self::generate_single_series($prefix, $folders);
  }
}
