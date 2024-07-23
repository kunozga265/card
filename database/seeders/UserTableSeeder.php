<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            "name" => "Dr Innocent Phangaphanga Phiri",
            "email" => "ipangapanga@luanar.ac.mw",
            "password" => bcrypt("12345678")
        ]);

        User::create([
            "name" => "Patrick Chimsue",
            "email" => "pchimseu@luanar.ac.mw",
            "password" => bcrypt("12345678")
        ]);

        User::create([
            "name" => "Kunozga Mlowoka",
            "email" => "kunozgamlowoka@gmail.com",
            "password" => bcrypt("12345678")
        ]);
    }
}
