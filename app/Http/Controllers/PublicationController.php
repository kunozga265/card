<?php

namespace App\Http\Controllers;

use App\Models\PageArea;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicationController extends Controller
{
    private $PUBLCIATIONS_DOWNLOAD_AREA = 5;

    public function index()
    {
        $publications = Publication::orderBy("date","desc")->get();
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.create', );
    }

    public function edit($slug)
    {
        $publication = Publication::where("slug",$slug)->first();
        if(is_object($publication)){
            return view('admin.publications.edit', compact("publication") );
        }else{
            return Redirect::back()->with("error","Publication not found");
        }
    }

    public function destroy($slug)
    {
        $publication = Publication::where("slug",$slug)->first();
        if(is_object($publication)){
            $publication->delete();
            return Redirect::route("publications.index")->with("success","Publication successfully deleted!");
        }else{
            return Redirect::back()->with("error","Publication not found");
        }
    }

    public function download(Request $request, $slug)
    {
        //Cache Visit
        $page_area = PageArea::find($this->PUBLCIATIONS_DOWNLOAD_AREA);
        (new AppController())->cacheVisit($request, $page_area);

        $publication = Publication::where("slug",$slug)->first();
        if(is_object($publication)){
            return Redirect::away($publication->link);
        }else{
            return Redirect::back()->with("error","Publication not found");
        }
    }
}
