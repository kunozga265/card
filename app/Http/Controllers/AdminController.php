<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\PageArea;
use App\Models\Publication;
use App\Models\PublicationType;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $unsorted = Visit::orderBy("created_at", "asc")->get();
        $sorted = [];
        $countriesData = [];
        $pageAreasData = [
            "data"=>[],
            "labels"=>[]
        ];
        $visitBarData = [
            "data"=>[],
            "labels"=>[]
        ];
        $typesBarData = [
            "data"=>[],
            "labels"=>[]
        ];

        if (!$unsorted->isEmpty()) {
            $currentMonth = date('F', $unsorted[0]->created_at->getTimestamp());
            $currentYear = date('Y', $unsorted[0]->created_at->getTimestamp());

            $item = 0;
            $index = 0;
            foreach ($unsorted as $visit) {

                if ($item == 0) {
                    $sorted[0] = [
                        'month' => $currentMonth,
                        'year' => $currentYear,
                        'data' => [$visit]
                    ];
                } else {
                    $month = date('F', $unsorted[$item]->created_at->getTimestamp());
                    $year = date('Y', $unsorted[$item]->created_at->getTimestamp());

                    if ($currentMonth === $month && $currentYear === $year) {
                        $sorted[$index]['data'][] = $visit;
                    } else {
                        $index += 1;
                        $currentMonth = date('F', $unsorted[$item]->created_at->getTimestamp());
                        $currentYear = date('Y', $unsorted[$item]->created_at->getTimestamp());

                        $sorted[$index] = [
                            'month' => $currentMonth,
                            'year' => $currentYear,
                            'data' => [$visit]
                        ];
                    }
                }
                $item += 1;
            }

            foreach ($sorted as $visit){
                $visitBarData["data"][] = count($visit["data"]);
                $visitBarData["labels"][] = $visit["month"];
            }
        }

        //Page Areas
        $page_areas = PageArea::all();
        foreach ($page_areas as $page_area){
            $pageAreasData["data"][] = $page_area->visits->count();
            $pageAreasData["labels"][] = $page_area->name;
        }

        //countries
        $countries = Visit::distinct("country")->pluck("country");
        foreach($countries as $country){
            $countriesData []= [
                "name" => $country,
                "count" => Visit::where("country",$country)->count()
            ];
        }

        //downloads
        $publications = Publication::all();
        $sortedPublications = $publications->sortBy(function (Publication $publication, int $key) {
            return $publication->downloads->count();
        });

        $sortedPublications->values()->all();
        $sortedPublications->splice(5);
        $publications = $sortedPublications;

        //Types
        $types = PublicationType::all();
        foreach ($types as $type){
            $typesBarData["data"][] = $type->downloads->count();
            $typesBarData["labels"][] = $type->name;
        }

        //counts
        $visitsCount = Visit::count();
        $downloadsCount = Download::count();

        return view('dashboard',compact("visitBarData","pageAreasData","countriesData","publications","typesBarData","downloadsCount","visitsCount"));
    }
}
