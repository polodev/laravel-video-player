<?php

namespace App\Libraries\HelperTraits;

trait JeffreyWayTrait {

  public static function jeffrey_way() {
    $prefix = 'jeffreyway/';
    $folders = [
      [
        'short_url'    => 'laracast_git',
        'topic_ids' => [21, 23,],
      ],
      [
        'short_url'    => 'laracasts_30_days_to_learn_jquery',
        'topic_ids' => [21,9,],
      ],
      [
        'short_url'    => 'laracasts_design_patterns_in_php',
        'topic_ids' => [21, 4, ],
      ],
      [
        'short_url'    => 'laracasts_code_katas',
        'topic_ids' => [21, 4, ],
      ],
      [
        'short_url'    => 'laracasts_how_to_read_code',
        'topic_ids' => [21,],
      ],
      [
        'short_url'    => 'laracasts_lets_build_a_forum_with_laravel',
        'topic_ids' => [21, 15, ],
      ],
      [
        'short_url'    => 'laracasts_object_oriented_bootcamp',
        'topic_ids' => [21, 4,],
      ],
      [
        'short_url'    => 'laracasts_real_time_laravel_with_socket.io',
        'topic_ids' => [21, 15, 8,],
      ],
      [
        'short_url'    => 'laracasts_redis',
        'topic_ids' => [21, 15,],
      ],
      [
        'short_url'    => 'laracasts_testing_jargon',
        'topic_ids' => [21, 4,],
      ],
      [
        'short_url'    => 'laracasts_the_magic_of_wordpress_custom_post_types',
        'topic_ids' => [21, 16,],
      ],
      [
        'short_url'    => 'laracasts_the_php_practitioner',
        'topic_ids' => [21, 4,],
      ],
      [
        'short_url'    => 'laracasts_understand_regular_expressions',
        'topic_ids' => [21, 4, ],
      ],
      [
        'short_url'    => 'laracasts_vue2',
        'topic_ids' => [21, 11,],
      ],
      [
        'short_url'    => 'laracasts_way_laravel_authentication',
        'topic_ids' => [21, 15, ],
      ],
      [
        'short_url'    => 'laracasts_way_testing_laravel',
        'topic_ids' => [21, 15, ],
      ],
      [
        'short_url'    => 'laracasts_webpack_for_everyone',
        'topic_ids' => [21, 7, ],
      ],
      [
        'short_url'    => 'laracasts_wordpress_plugin_development_essentials',
        'topic_ids' => [21, 16, ],
      ],

    ];
    return self::generate_single_series($prefix, $folders);
  }
}
