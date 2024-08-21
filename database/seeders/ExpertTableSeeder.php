<?php

namespace Database\Seeders;

use App\Models\Expert;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ExpertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expert::create([
            "photo" => "uploads/experts/innocent.png",
            "name" => "Dr. Innocent Mphangapanga-Phiri",
            "title" => "Acting Director",
            "slug" => Str::slug("")."-".date("Y-m-d"),
            "socials" => json_encode([
                [
                    "name" => "facebook",
                    "link" => "https://facebook.com",
                ],
                [
                    "name" => "twitter",
                    "link" => "https://twitter.com",
                ],
                [
                    "name" => "linkedin",
                    "link" => "https://linkedin.com",
                ],
            ],
            )]);
        Expert::create([
            "photo" => "uploads/experts/jumbe2.png",
            "title" => "Professor of Economic",
            "slug" => Str::slug("Professor Charles Jumbe")."-".date("Y-m-d"),
            "name" => "Professor Charles Jumbe",
            "socials" => json_encode([
                [
                    "name" => "facebook",
                    "link" => "https://facebook.com",
                ],
                [
                    "name" => "twitter",
                    "link" => "https://twitter.com",
                ],
                [
                    "name" => "linkedin",
                    "link" => "https://linkedin.com",
                ],
            ],
            )]);
        Expert::create([
            "photo" => "uploads/experts/Chilongo.jpg",
            "title" => "Senior Research Fellow",
            "slug" => Str::slug("Dr. Thabbie Chilongo")."-".date("Y-m-d"),
            "name" => "Dr. Thabbie Chilongo",
            "socials" => json_encode([
                [
                    "name" => "facebook",
                    "link" => "https://facebook.com",
                ],
                [
                    "name" => "twitter",
                    "link" => "https://twitter.com",
                ],
                [
                    "name" => "linkedin",
                    "link" => "https://linkedin.com",
                ],
            ],
            )]);
        Expert::create([
            "photo" => "uploads/experts/Makoka.jpg",
            "title" => "Senior Research Fellow",
            "slug" => Str::slug("Dr. Donald Makoka")."-".date("Y-m-d"),
            "name" => "Dr. Donald Makoka",
            "socials" => json_encode([
                [
                    "name" => "facebook",
                    "link" => "https://facebook.com",
                ],
                [
                    "name" => "twitter",
                    "link" => "https://twitter.com",
                ],
                [
                    "name" => "linkedin",
                    "link" => "https://linkedin.com",
                ],
            ],
            )]);
        Expert::create([
            "photo" => "uploads/experts/CHAFUWA.jpg",
            "title" => "Senior Research Fellow",
            "slug" => Str::slug("Dr. Chiyembekezo Chifuwa")."-".date("Y-m-d"),
            "name" => "Dr. Chiyembekezo Chifuwa",
            "socials" => json_encode([
                [
                    "name" => "facebook",
                    "link" => "https://facebook.com",
                ],
                [
                    "name" => "twitter",
                    "link" => "https://twitter.com",
                ],
                [
                    "name" => "linkedin",
                    "link" => "https://linkedin.com",
                ],
            ],
            )]);
    }
}
