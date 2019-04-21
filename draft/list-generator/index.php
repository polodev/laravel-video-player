<?php

/**










 */

require __dir__ . "/../../vendor/autoload.php";
$encoder = new \Riimu\Kit\PHPEncoder\PHPEncoder();

$topic_ids = [17];

$list = [
	'Lynda - WordPress - Developing with Sass and Grunt js',
'Lynda - WordPress Developer Tips Enqueuing Styles and Scripts Tutorial',
'Lynda - WordPress Plugins Analytics',
'Lynda - WordPress Plugins SEO',
'Lynda - WordPress Plugins Social Media Buttons',
'Lynda - WordPress Quick Tips Migration and Database Reset',
'Lynda - WordPress REST API (WP-API) - First Look',
'Lynda - WordPress and Internationalization',

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


