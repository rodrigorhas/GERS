<?php

	define("ROOT", __DIR__.'/..');

	error_reporting(0);

	$sess_name = session_name();

	if (session_start()) {
		setcookie($sess_name, session_id(), null, '/', null, null, true);
	}

	$GLOBALS['config'] = array(
		'mysql' => array(
			'host' => '127.0.0.1',
			'username' => 'root',
			'password' => '',
			'db' => 'gers'
		),
		'remember' => array(
			'cookie_name' => 'hash',
			'cookie_expiry' => 604800
		),
		'session' => array(
			'session_name' => 'user',
			'token_name' => 'token'
		)
	);

	spl_autoload_register(function($class){
		require_once ROOT.'/classes/' . $class . '.php';
	});

	require_once ROOT.'/functions/sanitize.php';
	require_once ROOT.'/functions/browser.php';

	if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
		$hash = Cookie::get(Config::get('remember/cookie_name'));
		$hashCheck = DB::getInstance()->get('user_sessions', array('hash', '=', $hash));

		if($hashCheck->count()) {

			$user = new User($hashCheck->first()->user_id);
			$user->login();
		}
	}