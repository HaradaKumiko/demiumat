<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use App\Models\Blog;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        Blog::insert([
            [
                'title' => 'Mari jaga kebersamaannya',
                'slug' => 'Mari-jaga-kebersamaannya',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/default.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'agenda kerja bakti',
                'slug' => 'Laporan-Kas-Masjid',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img1.jpg',
                'user_id' => 2,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'tabligh akbar tahunan',
                'slug' => 'tabligh-akbar-tahunan',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Selamat Berpuasa',
                'slug' => 'Selamat-Berpuasa',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/default.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Jangan Lupa Membayar Zakat',
                'slug' => 'Jangan-Lupa-Membayar-Zakat',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],

            [
                'title' => 'Selamat Hari Raya Idul Fitri',
                'slug' => 'Selamat-Hari-Raya-Idul-Fitri',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img1.jpg',
                'user_id' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
