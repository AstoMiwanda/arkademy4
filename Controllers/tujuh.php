<?php
/**
 * 
 */
class tujuh extends controller
{
	
	public function index($view) {
		$postId = 1;
		$title = self::query("SELECT * FROM `post` WHERE `createBy` = '$postId'");
		$username = self::query("SELECT `username` FROM `users` WHERE `id` = 1");
		

		self::CreateView($view, $title, $username);
	}
}