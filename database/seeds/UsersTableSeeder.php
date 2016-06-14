<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create([
            'email' => 'test@gmail.com',
            'name' => 'admin',
            'password' => Hash::make('123456')
        ]);
    }
}
