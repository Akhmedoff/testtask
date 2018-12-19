<?php
	namespace App\Http\Controllers;

	use App\Settings\Settings;
	
	class BaseController extends Controller
	{
		protected $settings;
		
		public function __construct(){
			$settings = new Settings;
			$this->settings = $settings->getDriver()->getSettings();
		}
	}