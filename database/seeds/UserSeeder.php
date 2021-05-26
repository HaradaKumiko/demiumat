<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        [ 
        'name'     => 'Farhan Rivaldy', 
        'email'    => 'farhan@farhan.net', 
        'password' => Hash::make('admin123'), 
        'role'     => 'Administrator', 
        'alamat'   => 'Gang Osaka Nomor 33 RT 40',
        'telepon'  => '081390905566',
        'avatar' => 'avatar/avatar-1.png'
        ],

        [ 
        'name' => 'Budi Hidayat', 
        'email' => 'budihidayat@gmail.com', 
        'password' => Hash::make('password123'), 
        'role' => 'Pengurus Takmir', 
        'alamat'   => 'Gang Tokyo Nomor 16 RT 41',
        'telepon'  => '089656782356',
        'avatar' => 'avatar/avatar-1.png'
        ],

        [ 
        'name' => 'Yono Saefullah', 
        'email' => 'yonosaefullah@gmail.com', 
        'password' => Hash::make('password123'), 
        'role' => 'Warga', 
        'alamat'   => 'Gang Kyoto Nomor 4 RT 39',
        'telepon'  => '081357385098',
        'avatar' => 'avatar/avatar-1.png'
        ],
        ]);
    }
}
