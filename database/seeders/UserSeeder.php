<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ユーザー1',
                'kana' => 'ユーザー1',
                'email' => 'user1@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー2',
                'kana' => 'ユーザー2',
                'email' => 'user2@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー3',
                'kana' => 'ユーザー3',
                'email' => 'user3@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー4',
                'kana' => 'ユーザー4',
                'email' => 'user4@test.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ユーザー5',
                'kana' => 'ユーザー5',
                'email' => 'user5@test.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
