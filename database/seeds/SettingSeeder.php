<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            ['key' => 'WEB_TITLE', 'value' => 'DemiUmat'],
            ['key' => 'WEB_PLACE_NAME', 'value' => 'Baitus Sholihin'],
            ['key' => 'WEB_PLACE_ADDRESS', 'value' => 'Batu Ampar, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76136'],
            ['key' => 'WEB_LOGO', 'value' => 'logo.png'],
            ['key' => 'WEB_FAVICON', 'value' => 'favicon.png'],
            ['key' => 'WEB_HEADER', 'value' => 'Selamat Datang di Website DemiUmat'],
            ['key' => 'WEB_MOTTO', 'value' => 'Dari Umat, Oleh Umat, Untuk Umat'],
            ['key' => 'WEB_BACKGROUND_IMAGE', 'value' => 'umat.jpg'],
            ['key' => 'WEB_DESCRIPTION', 'value' => 'DemiUmat merupakan aplikasi management masjid berbasis website bertujuan memudahkan tugas para takmir masjid'],
        ]);
    }
}
