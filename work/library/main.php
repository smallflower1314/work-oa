<?php
	defined('TAG') or die();
	define('STime', microtime());
	define('Smemorary', memory_get_usage());
	define('DI', DIRECTORY_SEPARATOR);
	define('EXT', '.class.php');
	
	define('ROOT', dirname(dirname(__FILE__)).DI);
	
	define('LibPath',ROOT.'library'.DI);

	require LibPath.'App'.DI.'app'.EXT;


	App\App::run();

	
