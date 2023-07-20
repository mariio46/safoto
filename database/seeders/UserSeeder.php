<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'username' => 'admin',
                'profile' => 'image/default/rio_profile.jpg',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => 1,
            ]
        );
        User::create(
            [
                'username' => 'asizan',
                'profile' => 'image/default/asizan_profile.jpg',
                'email' => 'asizan@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => 0,
            ]
        );
        User::create(
            [
                'username' => 'asdarkao',
                'profile' => 'image/default/asdar_profile.jpg',
                'email' => 'asdar@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => 0,
            ]
        );
        User::create(
            [
                'username' => 'anjas',
                'profile' => 'image/default/anjas_profile.jpg',
                'email' => 'anjas@gmail.com',
                'password' => Hash::make('password'),
                'isAdmin' => 0,
            ]
        );
    }
}
