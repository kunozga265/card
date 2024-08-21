<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AppController;
use App\Models\Publication;
use App\Models\PublicationType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Livewire\Component;

class NewPublication extends Component
{

    public $title, $description, $date, $link, $path, $publication_type_id;
    public $authors = [];

    public function render()
    {
        $types = PublicationType::orderBy("name","asc")->get();
        return view('livewire.new-publication',compact("types"));
    }

    public function store()
    {
        $this->validate([
            'title' => ['required'],
            'date' => ['required'],
            'link' => ['required'],
            'publication_type_id' => ['required'],
        ]);

        Publication::create([
            "title" => $this->title,
            "slug" => uniqid(),
            "description" => $this->description,
            "link" => $this->link,
            "path" => $this->path,
            "publication_type_id" => $this->publication_type_id,
            "date" => (new AppController())->getTimestamp($this->date),
            "authors" => json_encode($this->authors),
        ]);

        return Redirect::route("publications.index")->with("success","Successfully created publication!");

    }

    public function addAuthor()
    {
        $this->authors[] = "";
    }

    public function removeAuthor($key)
    {
        array_splice($this->authors, $key, 1);
    }
}
