<?php

namespace App\Libraries\HelperTraits;

trait SerieTrait {

	public static function boiler_plate() {
		$prefix = 'jeffreyway/';
		$folders = [];
		return self::generate_single_series($prefix, $folders);
	}



	public static function udemy() {
    // for temporary
		$prefix_back = 'ude/';
		$folders_back = [

      [
        'short_url' => 'Udemy - React 16 – The Complete Guide (incl. React Router 4 & Redux)',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => '[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => 'Udemy - Automate the Boring Stuff with Python Programming (2015)',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => 'Udemy-become-a-wordpress-developer-php-javascript',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => 'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => 'udemy_nuxt.js_vue.js_on_steroids',
        'topic_ids' => [20, 4,],
      ],
      [
        'short_url' => 'Vue JS 2 - The Complete Guide (incl. Vue Router & Vuex)',
        'topic_ids' => [20, 4,],
      ],

		];
		$back =  self::generate_single_series($prefix_back, $folders_back);
		return array_merge($back);
	}

  public static function udemy_original() {
    return [];
    $prefix_back = 'ude/back/';
    $folders_back = [
      [
        'short_url' => 'Introduction to Modern Programming with PHP',
        'topic_ids' => [20, 4],
      ],
      [
        'short_url' => 'Udemy - Automate the Boring Stuff with Python Programming (2015)',
        'topic_ids' => [20, 6],
      ],
      [
        'short_url' => 'Udemy - Learn Top Ten PHP FrameWorks By Building Projects',
        'topic_ids' => [20, 4],
      ],
      [
        'short_url' => 'Udemy-become-a-wordpress-developer-php-javascript',
        'topic_ids' => [20, 4, 16],
      ],
      [
        'short_url' => '[FreeCourseSite.com] Udemy - Learn Python in 12.5 hours',
        'topic_ids' => [20, 6,],
      ],
      [
        'short_url' => '[FreeCourseSite.com] Udemy - Try Django 1.9  Build a Blog and Learn Python\'s #1 Library',
        'topic_ids' => [20, 6, 24,],
      ],
      [
        'short_url' => '[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples',
        'topic_ids' => [20, 16,],
      ],
      [
        'short_url' => 'udemy - Learn Nodejs by building 10 projects',
        'topic_ids' => [20, 8,],
      ],
      [
        'short_url' => 'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops',
        'topic_ids' => [20, 23,],
      ],
    ];
    $back =  self::generate_single_series($prefix_back, $folders_back);
    return array_merge($back);
  }




}
