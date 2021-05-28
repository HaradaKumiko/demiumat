<?php

use Carbon\Carbon;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::insert([
            [
                'name' => 'Karpet Masjid',
                'amount' => 10,
                'status' => 'Layak',
                'source' => 'Anggaran Masjid',
                'user_id' => 1,
                'gallery' => 'gallery/default/default.jpg',
                'created_at' => Carbon::now()
            ],

            [
                'name' => 'Kipas Angin',
                'amount' => 6,
                'status' => 'Tidak Layak',
                'source' => 'Sumbangan',
                'user_id' => 1,
                'gallery' => 'gallery/default/img2.jpg',
                'created_at' => Carbon::now()
            ],

            [
                'name' => 'Tandon Air',
                'amount' => 5,
                'status' => 'Layak',
                'source' => 'Anggaran Masjid',
                'user_id' => 1,
                'gallery' => 'gallery/default/img2.jpg',
                'created_at' => Carbon::now()
            ],

            [
                'name' => 'Alat Pembersih',
                'amount' => 4,
                'status' => 'Layak',
                'source' => 'Sumbangan',
                'user_id' => 1,
                'gallery' => 'gallery/default/img3.jpg',
                'created_at' => Carbon::now()
            ],

            [
                'name' => 'Mimbar Masjid',
                'amount' => 1,
                'status' => 'Layak',
                'source' => 'Anggaran Masjid',
                'user_id' => 1,
                'gallery' => 'gallery/default/default.jpg',
                'created_at' => Carbon::now()
            ],

            [
                'name' => 'Televisi',
                'amount' => 4,
                'status' => 'Layak',
                'source' => 'Sumbangan',
                'user_id' => 1,
                'gallery' => 'gallery/default/img3.jpg',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
