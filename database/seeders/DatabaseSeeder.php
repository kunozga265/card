<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PageGroupTableSeeder::class,
            ProjectTableSeeder::class,
            UserTableSeeder::class,
            PublicationTypeTableSeeder::class,
            PageAreaTableSeeder::class,
            ExpertTableSeeder::class,
        ]);
    }
}
