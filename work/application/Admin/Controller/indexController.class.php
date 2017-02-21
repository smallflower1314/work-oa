<?php
	namespace Admin\Controller;

	use App\Controller;

	class IndexController extends Controller{
		public function index($name){
			echo $name;
		}
	}