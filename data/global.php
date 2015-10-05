<?php
/*$root_dir='http://2015.microartsdev.com';
$host ='';*/
if (isset($_SERVER['HTTP_HOST']) AND (!empty($_SERVER['HTTP_HOST']))) {
	$host = $_SERVER['HTTP_HOST'];
}
if ($host == "localhost") {
	$root_dir = 'http://localhost/';
} else {
	$root_dir = 'http://'. $host;
}


$year = @date('Y');
$current_url  = 'http://'.$host.$_SERVER['REQUEST_URI'] ;
$styles_dir = $root_dir.'/ux/css/';
$scripts_dir = $root_dir.'/ux/js/';
$ux_img_dir =  $root_dir.'/ux/imgs/';
$img_dir =  $root_dir.'/content/';
?>