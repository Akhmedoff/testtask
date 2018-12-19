<?php
	namespace App\Settings;

	use Config;

	class Settings{
		public $driver;

		public function __construct(){
			if(Config::get('base.settings_driver') == 'file'){
				$this->driver = new TextSettings;
			}
			else{
				$this->driver = new MysqlSettings;
			}
		}

		public function getDriver(){
			return $this->driver;
		}
	}