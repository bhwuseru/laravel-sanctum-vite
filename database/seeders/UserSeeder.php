<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
                [
                    'name' => 'user',
                    'email' => 'user@test.com',
                    'password' => Hash::make('p@ssw0rd'),
                    'created_at' => '2021/01/01 11:11:11'
                ],
                [
                    'name' => 'user2',
                    'email' => 'user2@a.com',
                    'password' => Hash::make('p@ssw0rd'),
                    'created_at' => '2021/01/01 11:11:11'
                ],
                [
                    'name' => 'user3',
                    'email' => 'user3@a.com',
                    'password' => Hash::make('p@ssw0rd'),
                    'created_at' => '2021/01/01 11:11:11'
                ],
        ]);

    }
}
