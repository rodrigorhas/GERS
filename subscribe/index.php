<?php

	require_once("../core/init.php");

	$data = array(
		"nome" => Input::get('nome'),
		"email" => Input::get('email'),
		"datacadastro" => time(),
		"cookie" => Cookie::get(Config::get('visitor/cookie_name')),
		"ref" => Input::get("ref")
	);

	$subscribe = DB::getInstance()->insert("cadastro_formula", $data);

	if($subscribe){
		$config = DB::getInstance()->query("SELECT * FROM config")->first();

		Redirect::to($config->after_subscribe_redirect_to);
	}
