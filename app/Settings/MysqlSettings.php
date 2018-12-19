<?php
	namespace App\Settings;
	use Illuminate\Support\Facades\DB;

	class MysqlSettings implements Configuration{

		public function getSettings(){
			$settings = DB::table('settings')
				->select('company_name','logo','address','map','url','email')
				->first();
			return (array) $settings;
		}

	}