<?php
	namespace App\Settings;

	use Config;

	class TextSettings implements Configuration{
		
		public function getSettings(){
			return Config::get('setprofile');
		}
	}