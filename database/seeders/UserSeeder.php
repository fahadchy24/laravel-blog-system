<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role' => 0,
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456')
            ],
            [
                'role' => 1,
                'name' => 'Author',
                'email' => 'author@mail.com',
                'password' => bcrypt('123456')
            ],
            [
                'role' => 2,
                'name' => 'User',
                'email' => 'user@mail.com',
                'password' => bcrypt('123456')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
