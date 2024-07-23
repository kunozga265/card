<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageGroup;
use App\Models\Project;
use App\Models\Publication;
use App\Models\PublicationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /* BANNERS */
    private $HOME_BANNER_1 = 1;
    private $HOME_BANNER_2 = 2;
    private $ABOUT_US_BANNER = 3;
    private $PROJECTS_BANNER = 4;
    private $EXPERTS_BANNER = 5;
    private $PUBLICATIONS_BANNER = 6;
    private $PARTNERS_BANNER = 7;
    private $CONTACT_US_BANNER = 8;

    /* PAGE CONTENT */
    private $INTRODUCTION = 9;
    private $MANDATE = 10;
    private $MISSION = 11;
    private $VISION = 12;
    private $THEMATIC_AREAS = 13;
    private $CORE_VALUES = 14;
    private $RESEARCH_PILLAR = 15;
    private $CONSULTANCY_PILLAR = 16;
    private $TRAINING_PILLAR = 17;
    private $OUTREACH_PILLAR = 18;
    private $MONEY_TARGET_ = 19;
    private $POLICY_BRIEFS_TARGET = 20;
    private $STUDENTS_TARGET = 21;
    private $DASHBOARDS_TARGET = 22;
    private $PUBLICATIONS_TARGET = 23;
    private $CONTACT_US_HEADING_1 = 24;
    private $CONTACT_US_HEADING_2 = 25;

    public function dashboard()
    {
        return view('dashboard',);
    }
    public function index()
    {
        $pages = PageGroup::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function show($id)
    {
        $page = PageGroup::find($id);

        if(is_object($page)){
            return view('admin.pages.show', compact('page'));

        }else{
            Redirect::back()->with("error","Page not found");
        }
    }

    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        if(is_object($page)){
            $page->update([
                "title" => $request->title,
                "subtitle" => $request->subtitle,
                "description" => $request->description,
            ]);

            if(isset($request->image)){
                if(file_exists($page->image)){
                    Storage::disk("public_uploads")->delete($page->image);
                }

                try {
                    $path=$request->file("image")->store('/uploads','public_uploads');
                    $page->update([
                        "image" => $path
                    ]);
                }catch (FileException $exception){
                    //catch file exception
                }
            }

//            $pages = PageGroup::all();
//            return view('admin.pages.index', compact('pages'));
//            Redirect::route("pages.index")->with("success","Page updated successfully");
            return Redirect::back()->with("success", "{$page->name} content updated!");

        }else{
            Redirect::back()->with("error","Page not found");
        }
    }

    public function home()
    {
        $first_banner = Page::find($this->HOME_BANNER_1);
        $second_banner = Page::find($this->HOME_BANNER_2);
        $introduction = Page::find($this->INTRODUCTION);
        $mission = Page::find($this->MISSION);
        $vision = Page::find($this->VISION);
        $thematic_areas = Page::find($this->THEMATIC_AREAS);
        $pillars_research = Page::find($this->RESEARCH_PILLAR);
        $pillars_consultancy = Page::find($this->CONSULTANCY_PILLAR);
        $pillars_training = Page::find($this->TRAINING_PILLAR);
        $pillars_outreach = Page::find($this->OUTREACH_PILLAR);
        $targets_money = Page::find($this->MONEY_TARGET_);
        $targets_policy_briefs = Page::find($this->POLICY_BRIEFS_TARGET);
        $targets_students = Page::find($this->STUDENTS_TARGET);
        $targets_dashboards = Page::find($this->DASHBOARDS_TARGET);
        $targets_publications = Page::find($this->PUBLICATIONS_TARGET);
        return view('home',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }

    public function aboutUs()
    {
        $banner = Page::find($this->ABOUT_US_BANNER);
        $mandate = Page::find($this->MANDATE);
        $mission = Page::find($this->MISSION);
        $vision = Page::find($this->VISION);
        $thematic_areas = Page::find($this->THEMATIC_AREAS);
        $pillars_research = Page::find($this->RESEARCH_PILLAR);
        $pillars_consultancy = Page::find($this->CONSULTANCY_PILLAR);
        $pillars_training = Page::find($this->TRAINING_PILLAR);
        $pillars_outreach = Page::find($this->OUTREACH_PILLAR);
        $targets_money = Page::find($this->MONEY_TARGET_);
        $targets_policy_briefs = Page::find($this->POLICY_BRIEFS_TARGET);
        $targets_students = Page::find($this->STUDENTS_TARGET);
        $targets_dashboards = Page::find($this->DASHBOARDS_TARGET);
        $targets_publications = Page::find($this->PUBLICATIONS_TARGET);
        $core_values = Page::find($this->CORE_VALUES);
        return view('pages.about-us',compact("banner","mandate","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications","core_values"));
    }

    public function experts()
    {
        $banner = Page::find($this->EXPERTS_BANNER);

        return view('pages.experts',compact("banner",));
    }
    public function publications(Request $request)
    {
        $banner = Page::find($this->PUBLICATIONS_BANNER);
        $types = PublicationType::orderBy("name","asc")->get();

        $type = PublicationType::where("slug", $request->query("section") )->first();
        $all = Publication::count();

        if(is_object($type)){
            $section = $type->name;
            $heading = $section;
            $publications = $type->publications;
        } else {
            $section = "All";
            $heading = "All Publications";
            $publications = Publication::orderBy("date","desc")->get();
        }

        return view('pages.publications',compact("banner","section","heading","types","publications","all"));
    }

    public function partners(Request $request)
    {
        $banner = Page::find($this->PARTNERS_BANNER);
        return view('pages.partners',compact("banner"));
    }

    public function contactUs(Request $request)
    {
        $banner = Page::find($this->CONTACT_US_BANNER);
        $first_heading = Page::find($this->CONTACT_US_HEADING_1);
        $second_heading = Page::find($this->CONTACT_US_HEADING_2);

        return view('pages.contact-us',compact("banner","first_heading","second_heading"));
    }

    public function projects(Request $request)
    {
        $banner = Page::find($this->PROJECTS_BANNER);
        $current = Project::where("active",1)->count();
        $past = Project::where("active",0)->count();


        $projects = Project::orderBy("date","desc")->paginate(20);


        if($request->query("filter") == "current"){
            $filter = "current";
        } else if($request->query("filter") == "past"){
            $filter = "past";
        } else {
            $filter = "all";
        }

        $projects = Project::all();

        return view('pages.projects',compact("banner","filter","projects","current","past"));
    }

    public function projectShow(Request $request, $slug)
    {
        $banner = Page::find($this->PROJECTS_BANNER);

        $project = Project::where("slug",$slug)->first();

        if(is_object($project)){
            return view('pages.projects-show',compact("banner","project"));
        }else{
            return Redirect::back()->with("error", "Project not found");
        }
    }
}
