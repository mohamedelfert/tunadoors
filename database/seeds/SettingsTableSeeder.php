<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data['site_name_ar'] = 'لوحه التحكم';
        $data['site_name_en'] = 'Dashboard';
        $data['email'] = 'info@app.com';
        $data['phone'] = '01153225410';
        $data['facebook'] = 'www.facebook.com';
        $data['instagram'] = 'www.instagram.com';
        $data['logo'] = 'logo.jpg';
        $data['icon'] = 'icon.jpg';
        $data['main_lang'] = 'arabic';
        $data['description'] = 'Description Here';
        $data['keywords'] = 'dashboard,dash';
        $data['status'] = 'open';
        $data['message_maintenance'] = 'Now Site In Maintenance Try Again Later';

        DB::table('settings')->insert($data);
    }
}
