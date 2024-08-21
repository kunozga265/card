<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = Expert::all();
        return view('admin.experts.index', compact('experts'));
    }

    public function create()
    {
        return view('admin.experts.create', );
    }

    public function edit($slug)
    {
        $expert = Expert::where("slug",$slug)->first();
        if(is_object($expert)){
            return view('admin.experts.edit', compact("expert") );
        }else{
            return Redirect::back()->with("error","Expert not found");
        }
    }

    public function destroy($slug)
    {
        $expert = Expert::where("slug",$slug)->first();
        if(is_object($expert)){
            if(isset($this->photo)) {
                //delete current photo
                if (file_exists($expert->photo)) {
                    Storage::delete($expert->photo);
                }
            }
            $expert->delete();
            return Redirect::route("experts.index")->with("success","Expert successfully deleted!");
        }else{
            return Redirect::back()->with("error","Expert not found");
        }
    }
}
