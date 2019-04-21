<?php

/**










 */

require __dir__ . "/../../vendor/autoload.php";
$encoder = new \Riimu\Kit\PHPEncoder\PHPEncoder();

$topic_ids = [17];

$list = [
	'Introduction to Modern Programming with PHP',
'Udemy - Automate the Boring Stuff with Python Programming (2015)',
'Udemy - Learn Top Ten PHP FrameWorks By Building Projects',
'Udemy-become-a-wordpress-developer-php-javascript',
'[FreeCourseSite.com] Udemy - Learn Python in 12.5 hours',
"[FreeCourseSite.com] Udemy - Try Django 1.9  Build a Blog and Learn Python's #1 Library",
'[Tutsgalaxy.com] - Modern WordPress Plugin Design Course. Cut & Paste examples',
'udemy - Learn Nodejs by building 10 projects',
'udemy_learn_docker_from_scratch_to_docker_swarm_for_devops',

];

function generate_series ($list, $topic_ids) {
	$new_list = [];
	foreach($list as $single) {
		$new_list[] = [
			'short_url'    => $single,
			'topic_ids' => $topic_ids,
		];
	}
	return $new_list;

}
$list_transfrom = generate_series($list, $topic_ids);
$ltp =  $encoder->encode($list_transfrom, [
  'array.indent' => 2,
]);
$file = fopen('generated_list.txt', 'w');
fwrite($file, $ltp);
fclose($file);


