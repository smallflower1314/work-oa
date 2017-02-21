<?php
	namespace App;
	class App {
		static $classmap = [];
		public static function run(){
			spl_autoload_register('self::autoload');
		}

		public static function autoload($filename){
			
		}

	}