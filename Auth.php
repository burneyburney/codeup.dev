<?php

require_once 'Log.php';

class Auth
{

	public static $username = 'guest';
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function check()
	{
		return isset($_SESSION['LOGGED_IN_USER']);

	}

	public static function attempt($username, $password)
	{
		if($username == self::$username && password_verify($password, self::$password)){
			$_SESSION['LOGGED_IN_USER'] = $username;

			$log = new Log();
			$log->logInfo("{$username}, YOU LOGGED IN!");


			// basically BREAKS once it hits return
			return TRUE;


		} else {
			return FALSE;
		}

	}

	public static function user()
	{
		// dont want to echo in functions
		$username = self::check()? $_SESSION['LOGGED_IN_USER']: NULL;
		return $username;

	}
	public static function logout()
	{
		session_unset();
		session_destroy();

	}


}


// conditional() ?  happyPath:sadpath ;