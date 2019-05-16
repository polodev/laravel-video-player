<?php

namespace App\Libraries\HelperTraits;

trait CodeCourseTrait {

  public static function code_course() {
    $prefix = '/codecourse/';
    $folders = [
      [ 'Build a classified ads site', [4, 15, 22,] ],
      [ 'Build a File Marketplace with Laravel', [4, 15, 22,] ],
      [ 'Clean code Laravel-5-18-serial-prob', [4, 15, 22,] ],
      [ 'code_course_laravel_nuxt_cart', [4, 15, 22,] ],
      [ 'Drag and drop sorting with Laravel', [4, 15, 22,] ],
      [ 'Eloquent By Example', [4, 15, 22,] ],
      [ 'End-to-end Browser Testing with Laravel Dusk', [4, 15, 22,] ],
      [ 'filtering-in-laravel', [4, 15, 22,] ],
      [ 'filtering-in-laravel-blade', [4, 15, 22,] ],
      [ 'filtering-in-laravel-vue-js', [4, 15, 22,] ],
      [ 'laravel-api-resources', [4, 15, 22,] ],
      [ 'Laravel-multi-tenancy-Multi-database', [4, 15, 22,] ],
      [ 'laravel-single-database-multi-tenancy', [4, 15, 22,] ],
      [ 'Learn Vue.js by example', [4, 15, 22,] ],
      [ 'Learn Vuex', [4, 15, 22,] ],
      [ 'list.js', [4, 15, 22,] ],
      [ 'nuxt-js-laravel-authentication', [4, 15, 22,] ],
      [ 'Practical-Git', [4, 15, 22,] ],
      [ 'Roles and permissions in Laravel', [4, 15, 22,] ],
      [ 'Single-page Forum App- API', [4, 15, 22,] ],
      [ 'The No Framework Framework', [4, 15, 22,] ],
      [ 'Tips for cleaner code', [4, 15, 22,] ],
      [ 'Unit testing with PHPUnit', [4, 15, 22,] ],

    ];
    $folders = self::set_main_id($folders, [22]);
    return self::generate_single_series($prefix, $folders);
  }
}
