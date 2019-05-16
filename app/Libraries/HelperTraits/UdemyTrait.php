<?php

namespace App\Libraries\HelperTraits;

trait UdemyTrait {

  public static function udemy_backend() {
    "udemy-backend  udemy-frontend  udemy-others ";
    $prefix = '/udemy/udemy-backend/';
    $folders = [
      [ 'Introduction to Docker', [20,] ],
      [ '[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples', [20,] ],
      [ 'Udemy - Automate the Boring Stuff with Python Programming (2015)', [20,] ],
      [ 'Udemy-become-a-wordpress-developer-php-javascript', [20,] ],
      [ 'udemy-complete-linux-training-course-to-get-your-dream-it-job-2019', [20,] ],
      [ 'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops', [20,] ],
      [ 'udemy_wp_development_themes_and_plugin', [20,] ],
      [ 'Wordpress Security - From Beginner to .htaccess', [20,] ],
    ];
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_frontend() {
    $prefix = '/udemy/udemy-frontend/';
    $folders = [];
    return self::generate_single_series($prefix, $folders);
  }

  public static function udemy_others() {
    $prefix = '/udemy/udemy-others/';
    $folders = [];
    return self::generate_single_series($prefix, $folders);
  }
  public static function udemy()
  {
    return array_merge(
      self::udemy_backend(),
      self::udemy_frontend(),
      self::udemy_others(),
    );
  }
}
