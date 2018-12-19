<?php
	namespace App\Settings;
	use Illuminate\Support\Facades\DB;

	class MysqlSettings implements Configuration{

		public function getSettings(){
			$settings = (array) DB::table('settings')->first();
			unset($settings['id']);
			return $settings;
		}

	}