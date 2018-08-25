<?php
/**
 * 
 */
class enam extends controller
{
	
	public function index($view) {
		$postId = 1;
		$title = self::query("SELECT `title` FROM `post` WHERE `createBy` = '$postId'");
		$username = self::query("SELECT `username` FROM `users` WHERE `id` = 1");
		$comments = self::query("SELECT `comment` FROM `comments`");
		$titleArr = $title;
		$usernameArr = $username;
		$commentsArr = $comments;

		self::CreateView($view, $titleArr, $usernameArr, $commentsArr);
	}
}