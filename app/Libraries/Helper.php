<?php 

namespace App\Libraries;

class Helper {
	public static function series(){
		$jeffreyway = self::generate_jeffrey_way();
		return array_merge($jeffreyway);
	}
	public static function topics(){
		return [
			'html', // 1
			'css', // 2
			'Js', // 3
			'Php', // 4
			'sql', // 5
			'python', // 6
			'es6', // 7
			'nodejs', // 8

			'jquery', // 9
			'react', // 10
			'vue', // 11

			'linux', //12 
			'server', //13 
			'database', //14 


			'laravel', //15 
			'wordpress', //16 

			'lynda', //17
			'tutsplus', // 18
			'treehouse', // 19
			'udemy', // 20
			'jeffreyway', // 21


		];
	}

	public static function generate_jeffrey_way() {
		return [
			[
				'title'    => 'laracast_git',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracast_git',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_30_days_to_learn_jquery',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_30_days_to_learn_jquery',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_code_katas',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_code_katas',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_design_patterns_in_php',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_design_patterns_in_php',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_es6',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_es6',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_forum',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_forum',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_handsoncommunity',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_handsoncommunity',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_how_do_i',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_how_do_i',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_how_to_read_code',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_how_to_read_code',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_incomplete_whatcha_working_on',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_incomplete_whatcha_working_on',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_learn_flexbox_through_examples',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_learn_flexbox_through_examples',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_learn_laravel_forge',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_learn_laravel_forge',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_learn_laravel_mix',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_learn_laravel_mix',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_lets_build_a_forum_with_laravel',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_lets_build_a_forum_with_laravel',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_modern_css_for_backend_developer',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_modern_css_for_backend_developer',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_object_oriented_bootcamp',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_object_oriented_bootcamp',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_professional_php_workflow_in_sublime_text_3',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_professional_php_workflow_in_sublime_text_3',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_real_time_laravel_with_socket.io',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_real_time_laravel_with_socket.io',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_redis',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_redis',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_search_as_service',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_search_as_service',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_setup_a_mac_dev',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_setup_a_mac_dev',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_solid',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_solid',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_sublime_text_mastery',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_sublime_text_mastery',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_testing_jargon',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_testing_jargon',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_the_magic_of_wordpress_custom_post_types',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_the_magic_of_wordpress_custom_post_types',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_the_php_practitioner',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_the_php_practitioner',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_understand_regular_expressions',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_understand_regular_expressions',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_various',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_various',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_vim_mastery',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_vim_mastery',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_vue2',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_vue2',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_way_forge',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_way_forge',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_way_laravel_5_7',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_way_laravel_5_7',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_way_laravel_authentication',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_way_laravel_authentication',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_way_testing_laravel',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_way_testing_laravel',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_webpack_for_everyone',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_webpack_for_everyone',
				'topic_id' => 21,
			],
			[
				'title'    => 'laracasts_wordpress_plugin_development_essentials',
				'url'      => '/Users/polodev/Documents/tuts_video/jeffreyway/laracasts_wordpress_plugin_development_essentials',
				'topic_id' => 21,
			],


		];
	}

}