<?php

namespace App\Libraries\HelperTraits;

trait LyndaTrait {

  public static function lynda_backend()
  {
    $prefix = 'lynda-backend/';
    $folders = [
      ['Deploying Docker to AWS', [17], ],
      ['Learning Docker', [17], ],
      ['Lynda - Amazon Web Services Essential Training (Aug 22, 2014)', [17], ],
      ['lynda.com - Practical Apache Web Server Administration', [17], ],
      ['Lynda.com - Python 3 Essential Training', [17], ],
      ['Lynda - Learning NGINX', [17], ],
      ['Lynda - Relational Database Fundamentals', [17], ],
      ['Lynda - Up and Running with Python and Django', [17], ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
  public static function lynda_node_js()
  {
    $prefix = 'lynda-node-js/';
  }
  public static function lynda_php_mysql()
  {
    $prefix = 'lynda-php-with-mysql/';
  }
  public static function lynda_frontend()
  {
    $prefix = 'lynda-frontend/';

  }
  public static function lynda_others()
  {
    $prefix = 'lynda-others/';

  }
  public static function lynda_wordpress()
  {
    $prefix = 'lynda-wordpress/';

  }


  public static function lynda() {
    $back = self::lynda_backend();
    $empty = [];
    return array_merge($back, $empty);
  }
}
