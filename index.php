<?php
require_once("Routes.php");

function __autoload($class_name) {
	if (file_exists('./Classes/'.$class_name.'.php')) {
		require_once './Classes/'.$class_name.'.php';
	}elseif (file_exists('./Controllers/'.$class_name.'.php')) {
		require_once './Controllers/'.$class_name.'.php';
	}elseif (file_exists('./Model/'.$class_name.'.php')) {
		require_once './Model/'.$class_name.'.php';
	}else{
		echo $class_name."nothing";
	}
};