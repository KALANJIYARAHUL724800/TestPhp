<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "dinesh",
                "email" => "dinesh123@gmail.com",
                "password" => Hash::make('password123')
            ]
        ];
        User::create($users[0]);
    }
}
