<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            "role" => 1,
            "jenis_kelamin" => "L",
            "telepon" => "+62879076582341"
        ]);
    }
}
