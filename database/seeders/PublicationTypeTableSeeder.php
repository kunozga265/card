<?php

namespace Database\Seeders;

use App\Models\PublicationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublicationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicationType::create([
            "name" => "Policy Briefs",
            "slug" => Str::slug("Policy Briefs"),
        ]);

        PublicationType::create([
            "name" => "Journal Articles",
            "slug" => Str::slug("Journal Articles"),
        ]);

        PublicationType::create([
            "name" => "Working Papers",
            "slug" => Str::slug("Working Papers"),
        ]);
    }
}
