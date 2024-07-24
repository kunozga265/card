<?php

namespace Database\Seeders;

use App\Models\PageArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageArea::create([
            "name" => "Home",
        ]);
        PageArea::create([
            "name" => "About Us",
        ]);
        PageArea::create([
            "name" => "Experts",
        ]);
        PageArea::create([
            "name" => "Publications",
        ]);
        PageArea::create([
            "name" => "Publications Read",
        ]);
        PageArea::create([
            "name" => "Partners",
        ]);
        PageArea::create([
            "name" => "Contact Us",
        ]);
        PageArea::create([
            "name" => "Research Projects",
        ]);
        PageArea::create([
            "name" => "Research Project Download",
        ]);
    }
}
