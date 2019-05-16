<?php

namespace App\Libraries\HelperTraits;

trait OtherVendorsTrait {

  public static function egghead()
  {
    $prefix = '/egghead/';
    $folders = [
      [ 'Egghead - Asyncronous Programming', [36, ] ],
      [ 'Egghead - Getting Started with Express.js', [36, ] ],
      [ 'Egghead - Introduction to Node The Fundamentals', [36, ] ],
      [ 'egghead.io - NodeJS - Getting Started with Express.js [expressyo]', [36, ] ],
      [ 'egghead.io - NodeJS - Introduction to Node - The Fundamentals [expressyo]', [36, ] ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function other_vendors() {
    return array_merge(
      self::egghead(),
    );
  }
}
