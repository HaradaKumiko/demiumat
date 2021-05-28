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
                'title' => 'Jangan Lupa Tahlilan Dirumah Pak Hidayat',
                'slug' => 'Jangan-Lupa-Tahlilan-Dirumah-Pak-Hidayat',
                'content' => $faker->text(200),
                'thumbnail' => 'thumbnail/default/img2.jpg',
                'user_id' => 3,
                'created_at' => Carbon::now()
            ],
        ]);
        
    }
}
