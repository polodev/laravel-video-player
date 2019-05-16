<?php

namespace App\Libraries\HelperTraits;

trait OthersTrait {


  public static function others_folder()
  {
    $prefix = '/others/others-vendor/';
    $folders = [
      [ 'advancedreact-fullstack-advanced-react-graphql', [34, ], ],
      [ 'frontendmasters-rapid-development-on-aws-react,-node.js-graphql', [34, ], ],
      [ 'hands-on-full-stack-web-development-with-graphql-and-react-[fco]', [34, ], ],
      [ 'Linux Academy - Mastering The Linux Command Line', [34, ], ],
      [ 'list.js', [34, ], ],
      [ 'vueschool-vue.js-firebase-realtime-database', [34, ], ],
      [ '[Wes Bos] - Learn Node (2017)', [34, ], ],

    ];
    return self::generate_single_series($prefix, $folders);

  }


  public static function others() {
    return array_merge(
      self::others_folder(),
    );
  }
}
