<?php

namespace App\Libraries\HelperTraits;

trait JeffreyWayTrait {

  public static function jeffrey_way() {
    $prefix = '/jeffreyway/';
    $folders = [
      ['laracast_git', [21, 23,], ],
      ['laracasts_30_days_to_learn_jquery', [21,9,], ],
      ['laracasts_design_patterns_in_php', [21, 4, ], ],
      ['laracasts_code_katas', [21, 4, ], ],
      ['laracasts_how_to_read_code', [21,], ],
      ['laracasts_lets_build_a_forum_with_laravel', [21, 15, ], ],
      ['laracasts_object_oriented_bootcamp', [21, 4,], ],
      ['laracasts_real_time_laravel_with_socket.io', [21, 15, 8,], ],
      ['laracasts_redis', [21, 15,], ],
      ['laracasts_testing_jargon', [21, 4,], ],
      ['laracasts_the_magic_of_wordpress_custom_post_types', [21, 16,], ],
      ['laracasts_the_php_practitioner', [21, 4,], ],
      ['laracasts_understand_regular_expressions', [21, 4, ], ],
      ['laracasts_vue2', [21, 11,], ],
      ['laracasts_way_laravel_authentication', [21, 15, ], ],
      ['laracasts_way_testing_laravel', [21, 15, ], ],
      ['laracasts_webpack_for_everyone', [21, 7, ], ],
      ['laracasts_wordpress_plugin_development_essentials', [21, 16, ], ],
    ];
    return self::generate_single_series($prefix, $folders);
  }
}
