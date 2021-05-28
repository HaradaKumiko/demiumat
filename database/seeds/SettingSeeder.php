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
            ['key' => 'WEB_PLACE_NAME', 'value' => ' Masjid Baitus Sholihin'],
            ['key' => 'WEB_PLACE_ADDRESS', 'value' => 'Jl. Soekarno Hatta No 12 KM 6 Kelurahan Graha Indah, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76136'],
            ['key' => 'WEB_LOGO', 'value' => 'assets/logo.png'],
            ['key' => 'WEB_FAVICON', 'value' => 'assets/favicon.png'],
            ['key' => 'WEB_HEADER', 'value' => 'Selamat Datang di Website DemiUmat'],
            ['key' => 'WEB_MOTTO', 'value' => 'Dari Umat, Oleh Umat, Untuk Umat'],
            ['key' => 'WEB_PLACE_IMAGE', 'value' => 'assets/slide/slide1.jpg'],
            ['key' => 'WEB_TAKMIR_IMAGE', 'value' => 'assets/slide/slide2.jpg'],
            ['key' => 'WEB_SLIDE_IMAGE', 'value' => 'assets/slide/slide3.jpg'],
            ['key' => 'WEB_DESCRIPTION', 'value' => 'DemiUmat Adalah Aplikasi Management Masjid Berbasis Website Yang Bertujuan Untuk Memudahkan Tugas Para Takmir Masjid.'],
        ]);
    }
}
