<?php

use Carbon\Carbon;
use App\Models\Forum;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Forum::insert([
            [
                'title' => 'Website DemiUmat Telah Tersedia',
                'slug' => 'Website-DemiUmat-Telah-Tersedia',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/default.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Laporan Kas Masjid Baitus Sholihin periode '. $faker->date('d-m-Y'),
                'slug' => 'Laporan-Kas-Masjid',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img1.jpg',
                'user_id' => 2,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Jaga Kesehatan Semuanya',
                'slug' => 'Jaga-Kesehatan-Semuanya',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Tingkatkan Semangat Beribadahnya',
                'slug' => 'Tingkatkan-Semangat-Beribadahnya',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Dokumentasi Halal Bi Halal',
                'slug' => 'Dokumentasi-Halal-Bi-Halal',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Dokumentasi Pengajian Rutin ',
                'slug' => 'Dokumentasi-Pengajian-Rutin',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img1.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Dokumentasi Hari Raya Idul Adha',
                'slug' => 'Dokumentasi-Hari-Raya-Idul-Adha',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/default.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()
            ],
        ]);
        
    }
}
