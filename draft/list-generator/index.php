<?php

/**










 */

require __dir__ . "/../../vendor/autoload.php";
$encoder = new \Riimu\Kit\PHPEncoder\PHPEncoder();

$topic_ids = [17];

$list = [
	'Grammar Fundamentals',
'Lynda - Amazon Web Services Essential Training (Aug 22, 2014)',
'Lynda.com - Project Management Essentials',
'Lynda.com.Camtasia.Studio.8.Essential.Training',
'Management Fundamentals',
'Sales Fundamentals with Jeff Bloomfield',
'Screencasting Fundamentals',
'Typing Fundamentals {Ace Merlin}',
'lynda -  Speed Reading Fundamentals',

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
$file = fopen('hello.txt', 'w');
fwrite($file, $ltp);
fclose($file);


