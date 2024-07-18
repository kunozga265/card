<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
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
        $first_banner = Page::find(1);
        $second_banner = Page::find(2);
        $introduction = Page::find(3);
        $mission = Page::find(4);
        $vision = Page::find(5);
        $thematic_areas = Page::find(6);
        $pillars_research = Page::find(7);
        $pillars_consultancy = Page::find(8);
        $pillars_training = Page::find(9);
        $pillars_outreach = Page::find(10);
        $targets_money = Page::find(11);
        $targets_policy_briefs = Page::find(12);
        $targets_students = Page::find(13);
        $targets_dashboards = Page::find(14);
        $targets_publications = Page::find(15);
        return view('home',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }

    public function aboutUs()
    {
        $first_banner = Page::find(1);
        $second_banner = Page::find(2);
        $introduction = Page::find(3);
        $mission = Page::find(4);
        $vision = Page::find(5);
        $thematic_areas = Page::find(6);
        $pillars_research = Page::find(7);
        $pillars_consultancy = Page::find(8);
        $pillars_training = Page::find(9);
        $pillars_outreach = Page::find(10);
        $targets_money = Page::find(11);
        $targets_policy_briefs = Page::find(12);
        $targets_students = Page::find(13);
        $targets_dashboards = Page::find(14);
        $targets_publications = Page::find(15);
        return view('pages.about-us',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }

    public function experts()
    {
        $first_banner = Page::find(1);
        $second_banner = Page::find(2);
        $introduction = Page::find(3);
        $mission = Page::find(4);
        $vision = Page::find(5);
        $thematic_areas = Page::find(6);
        $pillars_research = Page::find(7);
        $pillars_consultancy = Page::find(8);
        $pillars_training = Page::find(9);
        $pillars_outreach = Page::find(10);
        $targets_money = Page::find(11);
        $targets_policy_briefs = Page::find(12);
        $targets_students = Page::find(13);
        $targets_dashboards = Page::find(14);
        $targets_publications = Page::find(15);
        return view('pages.experts',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }
    public function publications(Request $request, $section)
    {
        $first_banner = Page::find(1);
        $second_banner = Page::find(2);
        $introduction = Page::find(3);
        $mission = Page::find(4);
        $vision = Page::find(5);
        $thematic_areas = Page::find(6);
        $pillars_research = Page::find(7);
        $pillars_consultancy = Page::find(8);
        $pillars_training = Page::find(9);
        $pillars_outreach = Page::find(10);
        $targets_money = Page::find(11);
        $targets_policy_briefs = Page::find(12);
        $targets_students = Page::find(13);
        $targets_dashboards = Page::find(14);
        $targets_publications = Page::find(15);
        return view('pages.publications',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }
    public function partners(Request $request)
    {
        $first_banner = Page::find(1);
        $second_banner = Page::find(2);
        $introduction = Page::find(3);
        $mission = Page::find(4);
        $vision = Page::find(5);
        $thematic_areas = Page::find(6);
        $pillars_research = Page::find(7);
        $pillars_consultancy = Page::find(8);
        $pillars_training = Page::find(9);
        $pillars_outreach = Page::find(10);
        $targets_money = Page::find(11);
        $targets_policy_briefs = Page::find(12);
        $targets_students = Page::find(13);
        $targets_dashboards = Page::find(14);
        $targets_publications = Page::find(15);
        return view('pages.partners',compact("first_banner","second_banner","introduction","mission","vision","thematic_areas","pillars_research","pillars_consultancy","pillars_training","pillars_outreach","targets_money","targets_policy_briefs","targets_students","targets_dashboards","targets_publications"));
    }
}
