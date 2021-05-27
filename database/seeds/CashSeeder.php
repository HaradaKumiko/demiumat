<?php

use Illuminate\Database\Seeder;
use App\Models\Cash;

class CashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cash::insert([
            [
                'info' => 'Pembelian AC & Ambal Masjid',
                'amount' => 5680000,
                'type' => 'Keluar',
                'user_id' => 1
            ],

            [
                'info' => 'Infaq Jumat',
                'amount' => 12576000,
                'type' => 'Masuk',
                'user_id' => 1
            ],

            [
                'info' => 'Dana Hibah',
                'amount' => 30000000,
                'type' => 'Masuk',
                'user_id' => 1
            ],
        ]);
    }
}
