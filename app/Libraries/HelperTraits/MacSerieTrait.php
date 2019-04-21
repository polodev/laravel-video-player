<?php 

namespace App\Libraries\HelperTraits;

trait MacSerieTrait {

	public static function boiler_plate() {
		$prefix = '/Users/polodev/Documents/tuts_video/jeffreyway/';
		$folders = [];
		return self::generate_single_series($prefix, $folders);
	}

	public static function jeffrey_way_mac() {
		$prefix = '/Users/polodev/Documents/tuts_video/jeffreyway/';
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
				'short_url'    => 'laracasts_code_katas',
				'topic_ids' => [21, 15, ],
			],
			[
				'short_url'    => 'laracasts_design_patterns_in_php',
				'topic_ids' => [21, 4, ],
			],
			[
				'short_url'    => 'laracasts_es6',
				'topic_ids' => [21, 7, ],
			],
			[
				'short_url'    => 'laracasts_forum',
				'topic_ids' => [21, 15,],
			],
			[
				'short_url'    => 'laracasts_handsoncommunity',
				'topic_ids' => [21, 15, ],
			],
			[
				'short_url'    => 'laracasts_how_do_i',
				'topic_ids' => [21],
			],
			[
				'short_url'    => 'laracasts_how_to_read_code',
				'topic_ids' => [21,],
			],
			[
				'short_url'    => 'laracasts_incomplete_whatcha_working_on',
				'topic_ids' => [21,],
			],
			[
				'short_url'    => 'laracasts_learn_flexbox_through_examples',
				'topic_ids' => [21, 2,],
			],
			[
				'short_url'    => 'laracasts_learn_laravel_forge',
				'topic_ids' => [21, 13, ],
			],
			[
				'short_url'    => 'laracasts_learn_laravel_mix',
				'topic_ids' => [21, 8,],
			],
			[
				'short_url'    => 'laracasts_lets_build_a_forum_with_laravel',
				'topic_ids' => [21, 15, ],
			],
			[
				'short_url'    => 'laracasts_modern_css_for_backend_developer',
				'topic_ids' => [21, 2,],
			],
			[
				'short_url'    => 'laracasts_object_oriented_bootcamp',
				'topic_ids' => [21, 4,],
			],
			[
				'short_url'    => 'laracasts_professional_php_workflow_in_sublime_text_3',
				'topic_ids' => [21, 23,],
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
				'short_url'    => 'laracasts_search_as_service',
				'topic_ids' => [21, 7, ],
			],
			[
				'short_url'    => 'laracasts_setup_a_mac_dev',
				'topic_ids' => [21, 23, ],
			],
			[
				'short_url'    => 'laracasts_solid',
				'topic_ids' => [21, 4,],
			],
			[
				'short_url'    => 'laracasts_sublime_text_mastery',
				'topic_ids' => [21, 23, ],
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
				'short_url'    => 'laracasts_various',
				'topic_ids' => [21],
			],
			[
				'short_url'    => 'laracasts_vim_mastery',
				'topic_ids' => [21, 23, ],
			],
			[
				'short_url'    => 'laracasts_vue2',
				'topic_ids' => [21, 11,],
			],
			[
				'short_url'    => 'laracasts_way_forge',
				'topic_ids' => [21, 13, ],
			],
			[
				'short_url'    => 'laracasts_way_laravel_5_7',
				'topic_ids' => [21, 15,],
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

	public static function code_course_mac() {
		$prefix = '/Users/polodev/Documents/tuts_video/jeffreyway/';
		$folders = [
			[
				'short_url' => 'Anonymous relationships in Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Build a File Marketplace with Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Build a classified ads site',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Clean code Laravel-5-18-serial-prob',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Cloud Image Upload with Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'DRYing up code with Eloquent Model Observers',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Drag and drop sorting with Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Dropdown Autocomplete Search Anything',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Eloquent By Example',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'End-to-end Browser Testing with Laravel Dusk',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Flexible Social Authentication with Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Laravel Chatroom',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Laravel Queues',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Laravel on Heroku',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Laravel real-time private messages',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Laravel-multi-tenancy-Multi-database',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Learn Vue.js by example',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Learn Vuex',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Practical-Git',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Quick and easy avatar uploads',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Roles and permissions in Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Single-page Forum App- API',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'The No Framework Framework',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'The Pagination Builder',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'The Repository Pattern in Laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Tips for cleaner code',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Unit testing with PHPUnit',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'Vue-Vuex Single Page App Boilerplate',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'anonymous-relationships-in-laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'better-laravel-database-notifications',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'code_course_laravel_nuxt_cart',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'filtering-in-laravel',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'filtering-in-laravel-blade',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'filtering-in-laravel-vue-js',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'laravel-api-resources',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'laravel-datatables',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'laravel-single-database-multi-tenancy',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'nuxt-js-laravel-authentication',
				'topic_ids' => [4, 15, 22,],
			],
			[
				'short_url' => 'reusable-laravel-comments',
				'topic_ids' => [4, 15, 22,],
			],


		];
		return self::generate_single_series($prefix, $folders);
	}
	public static function lynda_mac() {
		$prefix_back = '/Users/polodev/Documents/tuts_video/lyn/back/';
		$prefix_front = '/Users/polodev/Documents/tuts_video/lyn/front/';
		$prefix_others = '/Users/polodev/Documents/tuts_video/lyn/others/';
		$folders_back = [
			[
				'short_url' => 'Lynda - Design Patterns in PHP',
				'topic_ids' => [17, 4,],
			],
			[
				'short_url' => 'Lynda - Design Patterns with Python',
				'topic_ids' => [17, 6,],
			],
			[
				'short_url' => 'Lynda - Unit Testing with PHPUnit',
				'topic_ids' => [17, 4,],
			],
			[
				'short_url' => 'Lynda - Up and Running with Linux for PHP Developers',
				'topic_ids' => [17, 4,],
			],
			[
				'short_url' => 'Lynda - Up and Running with Python and Django',
				'topic_ids' => [17, 6, 24],
			],
			[
				'short_url' => 'Lynda-MySQL Essential Training',
				'topic_ids' => [17, 14, 5,],
			],
			[
				'short_url' => 'Lynda. Up and Running with PHP CodeIgniter',
				'topic_ids' => [17, 4, 25,],
			],
			[
				'short_url' => 'Lynda.com - Object-Oriented Programming with PHP',
				'topic_ids' => [17, 4,],
			],
			[
				'short_url' => 'Lynda.com - PHP with MySQL Essential Training 2013',
				'topic_ids' => [17, 4, 5, 14],
			],
			[
				'short_url' => 'PHP MVC Framework CodeIgniter',
				'topic_ids' => [17, 4,],
			],
			[
				'short_url' => 'PHP.with.MySQL.Beyond.the.Basics',
				'topic_ids' => [17, 4, 5, 14,],
			],
			[
				'short_url' => 'Up and Running with C {AceMerlin}',
				'topic_ids' => [17, 26,],
			],
			[
				'short_url' => 'lynda.com - Practical Apache Web Server Administration',
				'topic_ids' => [17, 13,],
			],
		];

		$folders_front = [
      [
        'short_url' => 'Lynda - Building a Polling App with Socket IO and React.js',
        'topic_ids' => [17, 8, 10],
      ],
      [
        'short_url' => 'Lynda - GIMP Essential Training (Updated Sep 04, 2014) - E_M_A',
        'topic_ids' => [17, 27,],
      ],
      [
        'short_url' => 'Lynda - JavaScript Events',
        'topic_ids' => [17, 3,],
      ],
      [
        'short_url' => 'Lynda - React Native Essential Training',
        'topic_ids' => [17, 10,],
      ],
      [
        'short_url' => 'Lynda - The DOM in JavaScript, jQuery, AngularJS, and React',
        'topic_ids' => [17, 3, 9,],
      ],
      [
        'short_url' => 'Lynda - jQuery Creating Plugins',
        'topic_ids' => [17, 9,],
      ],
      [
        'short_url' => 'Lynda - javascript_ Enhancing the DOM',
        'topic_ids' => [17, 3,],
      ],
      [
        'short_url' => "Lynda \xe2\x80\x93 Building a Website with Node.js and Express.js",
        'topic_ids' => [17, 8,],
      ],
      [
        'short_url' => 'Lynda.com - HTML5 Features (7 short courses)',
        'topic_ids' => [17, 1,],
      ],
      [
        'short_url' => 'Photoshop CC for Web Design with Justin Seeley',
        'topic_ids' => [17, 27,],
      ],
      [
        'short_url' => 'Up and Running with NoSQL Databases',
        'topic_ids' => [17, 14,],
      ],
    ];

    $folders_others = [
		  [
		    'short_url' => 'Grammar Fundamentals',
		    'topic_ids' => [17, 28],
		  ],
		  [
		    'short_url' => 'Lynda - Amazon Web Services Essential Training (Aug 22, 2014)',
		    'topic_ids' => [17, 13, 23,],
		  ],
		  [
		    'short_url' => 'Lynda.com - Project Management Essentials',
		    'topic_ids' => [17, 23,],
		  ],
		  [
		    'short_url' => 'Lynda.com.Camtasia.Studio.8.Essential.Training',
		    'topic_ids' => [17, 27,],
		  ],
		  [
		    'short_url' => 'Management Fundamentals',
		    'topic_ids' => [17, 29 ],
		  ],
		  [
		    'short_url' => 'Sales Fundamentals with Jeff Bloomfield',
		    'topic_ids' => [17, 29,],
		  ],
		  [
		    'short_url' => 'Screencasting Fundamentals',
		    'topic_ids' => [17, 27,],
		  ],
		  [
		    'short_url' => 'Typing Fundamentals {Ace Merlin}',
		    'topic_ids' => [17, 23,],
		  ],
		  [
		    'short_url' => 'lynda -  Speed Reading Fundamentals',
		    'topic_ids' => [17, 30,],
		  ],
		];


    $back = self::generate_single_series($prefix_back, $folders_back); 
    $front = self::generate_single_series($prefix_front, $folders_front); 
    $others = self::generate_single_series($prefix_others, $folders_others); 



		return array_merge($back, $front, $others);
	}




}