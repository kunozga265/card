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
            "name" => "Banners"
        ]);

        Page::create([
            "name" => "Home #1",
            "page_group_id" => $page_group->id,
            "title" => "The Centre for Agricultural Research and Development",
            "subtitle" => "Get invaluable insights from the 1st top notch public research policy institute in Malawi and leverage the power of data driven, evidence-based information dashboards
",
            "description" => "",
            "image" => "uploads/first_banner.png",
        ]);

        Page::create([
            "name" => "Home #2",
            "page_group_id" => $page_group->id,
            "title" => "The Centre for Agricultural Research and Development",
            "subtitle" => "Pioneering Policy Research and Sustainable Solutions for Inclusive wealthy, resilient Food Systems & Improved Nutrition in Malawi and Beyond",
            "description" => "",
            "image" => "uploads/second_banner.png",
        ]);

        Page::create([
            "name" => "About Us",
            "page_group_id" => $page_group->id,
            "title" => "About Us",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/about.png",
        ]);

        Page::create([
            "name" => "Research Projects",
            "page_group_id" => $page_group->id,
            "title" => "Research Projects",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/projects.png",
        ]);

        Page::create([
            "name" => "Experts",
            "page_group_id" => $page_group->id,
            "title" => "Experts",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/experts.png",
        ]);

        Page::create([
            "name" => "Publications",
            "page_group_id" => $page_group->id,
            "title" => "Publications",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/publications.png",
        ]);

        Page::create([
            "name" => "Partners",
            "page_group_id" => $page_group->id,
            "title" => "Partners",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/partners.png",
        ]);

        Page::create([
            "name" => "Contact Us",
            "page_group_id" => $page_group->id,
            "title" => "Contact Us",
            "subtitle" => "",
            "description" => "",
            "image" => "uploads/contact.png",
        ]);


        $page_group = PageGroup::create([
            "name" => "About"
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
            "name" => "Mandate",
            "page_group_id" => $page_group->id,
            "title" => "Card's Mandate",
            "subtitle" => "",
            "description" => "
<p>The Centre is mandated to offer local and international consulting services in agriculture and food security, project management, planning and socio-economic impact evaluation of development programmes and projects, [agriculture engineering? and architecture ?] and environmental and ntural resources management, among others.</p>
<p>CARD has combined their resources to provide independent consulting services with overseas researchers. CARD has the requisite expertise and experience working with reputable international (research) organizations such as IFPRI (USA), CIFOR (Indonesia/Zimbabwe), University of Greenwich and Natural Resources Institute (United Kingdom), Michigan State University and Clark University (USA).</p>
<p>Our impartiality is of vital importance to our clients and is their guarantee of receiving independent and neutral professional advice.</p>
<p>Our staff covers a wide range of development and engineering disciplines, with a high proportion of economists in addition to engineers, natural and social scientists from Lilongwe University of Agriculture and Natural Resources (LUANAR) faculties, represents a working environment that is truly multi-disciplinary.</p>
<p>CARD activities are undertaken by highly motivated, dedicated and committed staff to contribute to the generation of information and knowledge needed for designing agricultural and natural resource interventions to lift people out of poverty. It is also committed to the transfer on knowledge to households on existing opportunities for increased access to output and input markets, credit and other vital information generated through research</p>
",
            "image" => "",
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

        Page::create([
            "name" => "Core Values",
            "page_group_id" => $page_group->id,
            "title" => "Core Values",
            "subtitle" => "",
            "description" => "<ul>
<li>Excellence</li>
<li>Dynamism</li>
<li>Integrity</li>
<li>Professionalism</li>
<li>Diversity</li>
<li>Accountability</li>
</ul>",
            "image" => "uploads/core_values.jpg",
        ]);

        $page_group = PageGroup::create([
            "name" => "Pillars"
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
            "name" => "Targets"
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

        $page_group = PageGroup::create([
            "name" => "Contact Information"
        ]);

        Page::create([
            "name" => "Heading #1",
            "page_group_id" => $page_group->id,
            "title" => "Send us a message",
            "subtitle" => "Have Questions?",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "Heading #2",
            "page_group_id" => $page_group->id,
            "title" => "Contact Information",
            "subtitle" => "Developing capacity for sustainable and equitable development",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "Operating Hours",
            "page_group_id" => $page_group->id,
            "title" => "Opening Hours",
            "subtitle" => "",
            "description" => "<p>Monday- Friday, 08:00 am - 05:00pm</p>",
        ]);

        Page::create([
            "name" => "Phone Number",
            "page_group_id" => $page_group->id,
            "title" => "Hotline",
            "subtitle" => "+265 1 277 433",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "Address",
            "page_group_id" => $page_group->id,
            "title" => "Our Location",
            "subtitle" => "",
            "description" => "<p>LUANAR, Bunda Campus P.O. BOX 219 Lilongwe, Malawi</p>",
        ]);

        Page::create([
            "name" => "Email",
            "page_group_id" => $page_group->id,
            "title" => "Official Email",
            "subtitle" => "card@luanar.ac.mw",
            "description" => "<p></p>",
        ]);

        $page_group = PageGroup::create([
            "name" => "Social Media Links"
        ]);

        Page::create([
            "name" => "Facebook",
            "page_group_id" => $page_group->id,
            "title" => "Facebook",
            "subtitle" => "https://facebook.com/",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "Twitter",
            "page_group_id" => $page_group->id,
            "title" => "Twitter",
            "subtitle" => "https://x.com/",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "Youtube",
            "page_group_id" => $page_group->id,
            "title" => "Youtube",
            "subtitle" => "https://youtube.com/",
            "description" => "<p></p>",
        ]);

        Page::create([
            "name" => "LinkedIn",
            "page_group_id" => $page_group->id,
            "title" => "LinkedIn",
            "subtitle" => "https://linkedin.com/",
            "description" => "<p></p>",
        ]);


    }
}
