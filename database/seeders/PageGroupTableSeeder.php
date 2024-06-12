<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page_group = PageGroup::create([
            "name"=>"Home"
        ]);

        Page::create([
           "name"=>"Hero",
           "page_group_id"=>$page_group->id,
            "title"=>"The Centre for Agricultural Research and Development",
            "subtitle"=>"A dynamic center of excellence in policy research for inclusive wealthy creation, resilient agri-food systems, and nutrition",
            "description"=>"",
            "image"=>"uploads/hero-bg.png",
        ]);

        Page::create([
           "name"=>"Introduction",
           "page_group_id"=>$page_group->id,
            "title"=>"30",
            "subtitle"=>"Years of Success",
            "description"=>"Since 1994, CARD has been at the forefront of agricultural innovation. With three decades of experience, we have led the charge in shaping policies, training initiatives, and consultancy services that drive positive change in Malawi’s agricultural landscape. Our longstanding commitment to excellence and expertise makes us your trusted partner in building a sustainable future for agriculture and rural development.",
        ]);

        Page::create([
           "name"=>"Publications",
           "page_group_id"=>$page_group->id,
            "title"=>"Publications",
            "subtitle"=>"Enter description",
            "description"=>"",

        ]);

        Page::create([
           "name"=>"About Us",
           "page_group_id"=>$page_group->id,
            "title"=>"ABOUT US",
            "subtitle"=>"Cultivating Agricultural Research Excellence",
            "description"=>"The Center for Agricultural Research and Development (CARD) is a hub of innovation and expertise dedicated to transforming agriculture, rural development, and natural resource management.

The Centre for Agricultural Research and Development (CARD) is a research Centre of the Lilongwe University of Agriculture and Natural Resources (LUANAR), formerly Bunda College of Agriculture, under the University of Malawi.

CARD was established in 1994 with funding from the United States Agency for International Development (USAID) as a centre of excellence for undertaking high quality and timely policy research in agriculture and rural development, sustainable utilization of natural resources and environmental management.",
            "image"=>"uploads/about-us-bg.jpg",
        ]);

        Page::create([
           "name"=>"Recent News",
           "page_group_id"=>$page_group->id,
            "title"=>"Recent News",
            "subtitle"=>"Enter Description",
            "description"=>"",
        ]);

        Page::create([
           "name"=>"Research Link",
           "page_group_id"=>$page_group->id,
            "title"=>"Research",
            "subtitle"=>"",
            "description"=>"",
            "image"=>"uploads/research.png",
        ]);

        Page::create([
           "name"=>"Publications Link",
           "page_group_id"=>$page_group->id,
            "title"=>"Publications",
            "subtitle"=>"Dive into a wealth of knowledge",
            "description"=>"",
            "image"=>"uploads/img.png",
        ]);

        Page::create([
           "name"=>"Outreach and Engagement Link",
           "page_group_id"=>$page_group->id,
            "title"=>"Outreach and Engagement",
            "subtitle"=>"",
            "description"=>"",
            "image"=>"uploads/img_1.png",
        ]);
        Page::create([
           "name"=>"Consulting Link",
           "page_group_id"=>$page_group->id,
            "title"=>"Consulting",
            "subtitle"=>"",
            "description"=>"",
            "image"=>"uploads/img_2.png",
        ]);
    }
}
