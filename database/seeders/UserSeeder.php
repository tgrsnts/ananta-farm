<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "nama" => "Admin",
            "email" => "admin@gmail.com",
            "password" => "rahasia",
            "role" => 1
        ]);
    }
}
