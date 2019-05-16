<?php

$filename = "/dhaka/is/better/dhak";
$title = 'no';
if(substr_count($filename, "/") > 1) {
  $filename_explode = explode('/', $filename);
  $title = end($filename_explode);
}

echo $title;
