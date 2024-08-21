<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AppController;
use App\Models\Expert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewExpert extends Component
{
    use WithFileUploads;

    public $title, $photo, $name;
    public $socials = [
        [
            "name" => "facebook",
            "link" => "https://facebook.com",
        ],
        [
            "name" => "twitter",
            "link" => "https://twitter.com",
        ],
        [
            "name" => "linkedin",
            "link" => "https://linkedin.com",
        ],
    ];

    public function render()
    {
        return view('livewire.new-expert');
    }

    public function store()
    {
        $this->validate([
            'title' => ['required'],
            'name' => ['required'],
            'photo' => ['required',"image"],
        ]);

        $filename = $this->photo->store("uploads/experts","public_uploads");

        Expert::create([
            "title" => $this->title,
            "name" => $this->name,
            "slug" => Str::slug($this->name)."-".date("Y-m-d"),
            "photo" => $filename,
            "socials" => json_encode($this->socials),
        ]);

        return Redirect::route("experts.index")->with("success","Successfully created expert!");

    }

    public function addSocial()
    {
        $this->socials[] = "";
    }

    public function removeSocial($key)
    {
        array_splice($this->socials, $key, 1);
    }

}
