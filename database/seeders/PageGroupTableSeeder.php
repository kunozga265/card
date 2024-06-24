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
            "name" => "Home"
        ]);

        Page::create([
            "name" => "First Banner",
            "page_group_id" => $page_group->id,
            "title" => "The Centre for Agricultural Research and Development",
            "subtitle" => "Get invaluable insights from the 1st top notch public research policy institute in Malawi and leverage the power of data driven, evidence-based information dashboards
",
            "description" => "",
            "image" => "uploads/hero-bg.png",
        ]);

        Page::create([
            "name" => "Second Banner",
            "page_group_id" => $page_group->id,
            "title" => "The Centre for Agricultural Research and Development",
            "subtitle" => "Pioneering Policy Research and Sustainable Solutions for Inclusive wealthy, resilient Food Systems & Improved Nutrition in Malawi and Beyond",
            "description" => "",
            "image" => "uploads/hero-bg.png",
        ]);

        Page::create([
            "name" => "Introduction",
            "page_group_id" => $page_group->id,
            "title" => "30",
            "subtitle" => "Years of Success",
            "description" => "<p>Since 1994, CARD has been at the forefront of agricultural innovation. With three decades of experience, we have led the charge in shaping policies, training initiatives, and consultancy services that drive positive change in Malawi’s agricultural landscape. Our longstanding commitment to excellence and expertise makes us your trusted partner in building a sustainable future for agriculture and rural development.</p>",
            "image" => "uploads/img_1.png",
        ]);

        Page::create([
            "name" => "Mission",
            "page_group_id" => $page_group->id,
            "title" => "Mission",
            "subtitle" => "",
            "description" => "<p>To generate, adapt, apply and transfer information, knowledge, tools, skills, practices and attitudes that enhance individual, organisational and systemic capacity for sustainable development of national and international communities.</p>",
            "image" => "uploads/icon/3.png",
        ]);

        Page::create([
            "name" => "Vision",
            "page_group_id" => $page_group->id,
            "title" => "Vision",
            "subtitle" => "",
            "description" => "<p>A dynamic centre of excellence in agricultural and applied policy research and training for sustainable development.</p>",
            "image" => "uploads/icon/2.png",
        ]);

        Page::create([
            "name" => "Thematic Areas",
            "page_group_id" => $page_group->id,
            "title" => "Thematic Areas",
            "subtitle" => "",
            "description" => "<ul>
<li>Agricultural Production and Productivity</li>
<li>Agricultural Commercialisation and Value Chain Analysis</li>
<li>Agrifood Systems and Transformation</li>
<li>Natural Resource Management, Energy and Climate Change</li>
<li>Social Protection, Gender and Resilience</li>
<li>Data Science, Research Translation and Policy Influence</li>
</ul>",
            "image" => "uploads/thematic-banner.jpg",
        ]);

        $page_group = PageGroup::create([
            "name" => "Our Pillars"
        ]);

        Page::create([
            "name" => "Research",
            "page_group_id" => $page_group->id,
            "title" => "Research",
            "subtitle" => "",
            "description" => "<p>To provide research-based policy solutions to address the key developmental challenges of Malawi</p>",

        ]);

        Page::create([
            "name" => "Consultancy",
            "page_group_id" => $page_group->id,
            "title" => "Consultancy",
            "subtitle" => "",
            "description" => "<p>To enable clients access technical expertise for enhancing development and delivery of their services for mutual benef</p>",

        ]);

        Page::create([
            "name" => "Training",
            "page_group_id" => $page_group->id,
            "title" => "Training",
            "subtitle" => "",
            "description" => "<p>To contribute to professional development of individuals and capacity development of organizations</p>",

        ]);

        Page::create([
            "name" => "Outreach",
            "page_group_id" => $page_group->id,
            "title" => "Outreach",
            "subtitle" => "",
            "description" => "<p>To engage stakeholders through informational resources to create awareness on CARD research outcomes, thereby generating a positive impact on society</p>",

        ]);

        $page_group = PageGroup::create([
            "name" => "Our Targets"
        ]);

        Page::create([
            "name" => "Money",
            "page_group_id" => $page_group->id,
            "title" => "2",
            "subtitle" => "$",
            "description" => "<p>Billion</p>",

        ]);

        Page::create([
            "name" => "Policy Briefs",
            "page_group_id" => $page_group->id,
            "title" => "1000",
            "subtitle" => "",
            "description" => "<p>Policy Briefs</p>",

        ]);

        Page::create([
            "name" => "Students",
            "page_group_id" => $page_group->id,
            "title" => "1000",
            "subtitle" => "",
            "description" => "<p>Students capacitated in research, Artificial Intelligence, Machine Learning, and policy dissemination</p>",

        ]);

        Page::create([
            "name" => "Dashboards",
            "page_group_id" => $page_group->id,
            "title" => "20",
            "subtitle" => "",
            "description" => "<p>Artificial Intelligence & Deep Learning policy dashboards</p>",

        ]);

        Page::create([
            "name" => "Publications",
            "page_group_id" => $page_group->id,
            "title" => "500",
            "subtitle" => "",
            "description" => "<p>Publications</p>",

        ]);


    }
}
