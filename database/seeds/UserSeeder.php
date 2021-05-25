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
        [ 'name' => 'Farhan Rivaldy', 'email' => 'farhan@farhan.net', 'password' => Hash::make('admin123'), 'role' => 'Administrator', 'avatar' => 'userdefault.jpg' ],
        [ 'name' => 'Budi Hidayat', 'email' => 'budihidayat@gmail.com', 'password' => Hash::make('password123'), 'role' => 'Takmir Masjid', 'avatar' => 'userdefault.jpg'],
        [ 'name' => 'Yono Saefullah', 'email' => 'yonosaefullah@gmail.com', 'password' => Hash::make('password123'), 'role' => 'Warga', 'avatar' => 'userdefault.jpg'],
        ]);
    }
}
