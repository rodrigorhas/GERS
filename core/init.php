<?php

	define("ROOT", __DIR__.'/..');

	//error_reporting(0);

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
		'visitor' => array(
			'cookie_name' => 'visitor',
			'cookie_expiry' => 604800
		)
	);

	spl_autoload_register(function($class){
		require_once ROOT.'/classes/' . $class . '.php';
	});

	require_once ROOT.'/functions/sanitize.php';
	require_once ROOT.'/functions/browser.php';

	if(Cookie::exists(Config::get('visitor/cookie_name'))) {
		$hash = Cookie::get(Config::get('visitor/cookie_name'));
	}else{
		$hash = md5(uniqid());
		Cookie::put(Config::get('visitor/cookie_name'), $hash, Config::get('visitor/cookie_expiry'));
	}