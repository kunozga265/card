<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
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

            $pages = PageGroup::all();
            return view('admin.pages.index', compact('pages'));
//            Redirect::route("pages.index")->with("success","Page updated successfully");

        }else{
            Redirect::back()->with("error","Page not found");
        }
    }

    public function home()
    {
        $hero_section = Page::find(1);
        $introduction_section = Page::find(2);
        $publications_section = Page::find(3);
        $about_us_section = Page::find(4);
        $recent_news_section = Page::find(5);
        $research_link_section = Page::find(6);
        $publications_link_section = Page::find(7);
        $outreach_link_section = Page::find(8);
        $consulting_link_section = Page::find(9);
        return view('home',compact("hero_section","introduction_section","publications_section","about_us_section","recent_news_section","research_link_section","publications_link_section","outreach_link_section","consulting_link_section"));
    }
}
