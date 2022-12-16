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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Quentin",
                "email" => "quentin@q.com",
                "role_id" => 3,
                "password" => Hash::make("quentin@q.com")
            ],
            [
                "name" => "Anthony",
                "email" => "antho@antho.com",
                "role_id" => 2,
                "password" => Hash::make("antho@antho.com")
            ],
            [
                "name" => "Cyril",
                "email" => "cyril@cyril.com",
                "role_id" => 3,
                "password" => Hash::make("cyril@cyril.com")
            ],
            [
                "name" => "Marouane",
                "email" => "ma@ma.com",
                "role_id" => 1,
                "password" => Hash::make("ma@ma.com")
            ],
        ]);
    }
}
