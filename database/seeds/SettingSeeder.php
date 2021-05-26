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
            ['key' => 'WEB_DESCRIPTION', 'value' => 'DemiUmat adalah aplikasi management masjid berbasis website bertujuan memudahkan tugas para takmir masjid.
            Tujuan lain untuk menambah portofolio Saya Sebagai Web Developer, Saya berharap aplikasi ini bisa membantu banyak orang dan bisa menjadi amal jariyah Saya kelak di akhirat nanti. 
            Kedepannya akan Saya coba untuk menambahkan fitur yang sekiranya dibutuhkan. Silahkan download source code ini secara gratis untuk keperluan belajar atau menggunakannya di Masjid/Musholla bila ada kendala silahkan menghubungi Saya akan Saya bantu sebisa mungkin, 
            Saya mohon dengan penuh hormat dilarang untuk memperjual-belikan source-code ini dan sebisa mungkin untuk tidak mengganti atau menghilangkan creditnya'
            ],
        ]);
    }
}
