<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AppController;
use App\Models\Publication;
use App\Models\PublicationType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Livewire\Component;

class EditPublication extends Component
{
    public $publication;
    public $title, $description, $date, $link, $path, $publication_type_id;
    public $authors = [];

    public function mount($publication)
    {
        $this->title = $publication->title;
        $this->description = $publication->description;
        $this->link = $publication->link;
        $this->path = $publication->path;
        $this->publication_type_id = $publication->type->id;
        $this->date = date('Y-m-d',$publication->date);
        $this->authors = json_decode($publication->authors);
    }

    public function render()
    {
        $types = PublicationType::orderBy("name","asc")->get();
        return view('livewire.edit-publication',compact("types"));
    }

    public function update()
    {
        $this->validate([
            'title' => ['required'],
            'date' => ['required'],
            'link' => ['required'],
            'publication_type_id' => ['required'],
        ]);

        $this->publication->update([
            "title" => $this->title,
            "slug" => Str::slug($this->title)."-".date("Y-m-d"),
            "description" => $this->description,
            "link" => $this->link,
            "path" => $this->path,
            "publication_type_id" => $this->publication_type_id,
            "date" => (new AppController())->getTimestamp($this->date),
            "authors" => json_encode($this->authors),
        ]);

        return Redirect::route("publications.index")->with("success","Successfully updated publication!");

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
