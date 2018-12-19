<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(
        	[
				'company_name' => 'Other company',
				'logo' => 'logotype.png',
				'address' => 'Some other address',
				'map' => 'yandex map here',
				'url' => 'http://othersite.test',
				'email' => 'info@othersite.com',
			]
    	);
    }
}
