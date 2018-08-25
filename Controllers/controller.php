<?php

/**
 * 
 */
class controller extends Database {
	
	public static function CreateView($view, $title='', $username='', $comments='') {
		require_once("./Views/$view.php");
	}
}