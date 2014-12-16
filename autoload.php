<?php 

define('EXT','.php');

$map = [
	'easychart/src/'
];


function autoload($class){
	global $map;
	
	$class = str_replace('\\','/',$class);

	foreach($map AS $path){
		if(file_exists($path.$class.EXT)){
			include($path.$class.EXT);
			return;
		}
	}
}

spl_autoload_register('autoload');