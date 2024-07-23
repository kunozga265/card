<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
           "title" => "The Political Economy of Tobacco Farming in Low and Middle-Income Countries",
            "duration" => "5 Years (2017-2022)",
            "date" => 1483221600,
            "active" => false,
            "funders" => json_encode([
                "National Institute of Health (NIH)",
                "United States Govt"
            ]),
            "countries" => json_encode([
                "Malawi",
                "Zambia",
                "Kenya",
                "Indonesia",
            ]),
            "implementers" => json_encode([
                "American Cancer Society (Grant Holder)",
                "Centre for Agricultural Research and Development [MALAWI]",
                "University of Zambia, School of Medicine [Zambia]",
                "International Institute for Legislative Affairs [Kenya]",
                "SurveyMETER [Indonesia]",
            ]),
            "collaborators" => json_encode([
                "McGill University [Canada]",
                "University of Ottawa [Canada]",
            ]),
            "objectives" => json_encode([
                "Using the field of political economy as the overarching approach to the research and the corresponding training and dissemination efforts, the project has three specific aims",
                "To develop a rigorous theoretical and empirical framework that helps to elucidate the livelihoods of tobacco farmers in LMICs",
                "Using individual-level economic surveys of nationally-representative samples of tobacco farmers in four major tobacco-growing countries and focus group discussions with farmers to establish empirically the landscape of these livelihoods in order to inform relevant public health and agro-economic policies",
                "To grow capacity in four LMICs at the nexus of agro-economic and public health policies",
            ]),
            "investigators" => json_encode([
                "Dr. Donald Makoka, Research Fellow, CARD",
            ]),
        ]);

        Project::create([
           "title" => "Improving the Enabling Environment for Fertilizer Markets in Africa: An Institutional Collaborative Approach to Value Chain Development",
            "duration" => "2 Years (2017-2018)",
            "date" => 1483221600,
            "active" => false,
            "funders" => json_encode([
                "Michigan State University Alliance for African Partnership"
            ]),
            "countries" => json_encode([
                "Malawi",
                "Zambia",
                "Kenya",
                "Indonesia",
            ]),
            "implementers" => json_encode([
                "Michigan State University",
                "The African Fertilizer and Agribusiness Partnership",
                "The Regional Network of Agricultural Policy Research Institutes (ReNAPRI)",
                "The New Markets Lab, and the International Fertilizer Development Center.",
            ]),
            "collaborators" => json_encode([
                "McGill University [Canada]",
                "University of Ottawa [Canada]",
            ]),
            "objectives" => json_encode([
                "To understand the fertilizer supply chain in Africa, including an assessment of the enabling environment through analysis of policies and regulations.",
            ]),
            "investigators" => json_encode([
                "Mr. Richard Kachule, Research Fellow, CARD",
            ]),
        ]);

        Project::create([
           "title" => "Confronting Energy Poverty: Building an Interdisciplinary Evidence Base, Network, and Capacity for Transformative Change (PIRE).",
            "duration" => "5 Years (2017-2022)",
            "date" => 1483221600,
            "active" => false,
            "funders" => json_encode([
                "University of North Carolina (Chapel Hill)"
            ]),
            "countries" => json_encode([
                "Malawi",
            ]),
            "implementers" => json_encode([
                "University of North Carolina at Chapel Hill",
                "Centre for Agricultural Research and Development (CARD)",
                "University of Zimbabwe",
                "Center for Environmental, Technology, and Energy Economics",
                "RTI International",
                "Copper belt University, (Zambia)",
            ]),
            "collaborators" => json_encode([

            ]),
            "objectives" => json_encode([
                "The objective of the project is to foster a path-breaking integrated research, training, and policy outreach program focused on energy poverty in Southern Africa by addressing the questions: what types of energy poverty interventions offer promising scalable and sustainable social and environmental solutions?",
            ]),
            "investigators" => json_encode([
                "Prof. Charles Jumbe, Research Professor, CARD",
                "Dr. Thabbie Chilongo, Acting Director, CARD"
            ]),
        ]);
    }
}
