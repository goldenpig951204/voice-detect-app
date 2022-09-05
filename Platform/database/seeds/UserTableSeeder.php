<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Saar',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 2
        ]);
    }
}
