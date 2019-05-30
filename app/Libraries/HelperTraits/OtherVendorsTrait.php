<?php

namespace App\Libraries\HelperTraits;

trait OtherVendorsTrait {

  public static function egghead()
  {
    $prefix = '/egghead/';
    $folders = [
      [ 'Egghead - Asyncronous Programming', [ 3, ] ],
      [ 'Egghead - Getting Started with Express.js', [ 8, ] ],
      [ 'Egghead - Introduction to Node The Fundamentals', [ 8, ] ],
      [ 'egghead.io - NodeJS - Getting Started with Express.js [expressyo]', [ 8, ] ],
      [ 'egghead.io - NodeJS - Introduction to Node - The Fundamentals [expressyo]', [ 8, ] ],
    ];
    $folders = self::set_main_id($folders, [36]);
    return self::generate_single_series($prefix, $folders);
  }
  public static function other_vendors() {
    return array_merge(
      self::egghead()
    );
  }
}
