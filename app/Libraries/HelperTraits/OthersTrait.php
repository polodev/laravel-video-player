<?php

namespace App\Libraries\HelperTraits;

trait OthersTrait {


  public static function others_folder()
  {
    $prefix = '/others/others-vendor/';
    $folders = [
      [ 'advancedreact-fullstack-advanced-react-graphql', [40, 10,], ],
      [ 'frontendmasters-rapid-development-on-aws-react,-node.js-graphql', [8, 40, 10,], ],
      [ 'hands-on-full-stack-web-development-with-graphql-and-react-[fco]', [40, 10,], ],
      [ 'Linux Academy - Mastering The Linux Command Line', [12], ],
      [ 'vueschool-vue.js-firebase-realtime-database', [14,], ],
      [ '[Wes Bos] - Learn Node (2017)', [8,], ],

    ];
    $folders = self::set_main_id($folders, [34, ]);
    return self::generate_single_series($prefix, $folders);

  }


  public static function others() {
    return array_merge(
      self::others_folder(),
    );
  }
}
