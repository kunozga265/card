<?php

namespace App\Http\Livewire;

use App\Models\Expert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditExpert extends Component
{
    use WithFileUploads;

    public $expert;
    public $title, $photo, $name, $socials;

    public function mount($expert)
    {
        $this->name = $expert->name;
        $this->title = $expert->title;
//        $this->photo = $expert->photo;
        $this->socials = json_decode($expert->socials);
    }

    public function render()
    {
        return view('livewire.edit-expert');
    }

    public function update()
    {
        $this->validate([
            'title' => ['required'],
            'name' => ['required'],
//            'photo' => ['required',"image"],
        ]);

        $this->expert->update([
            "title" => $this->title,
            "name" => $this->name,
            "slug" => Str::slug($this->name)."-".date("Y-m-d"),
            "socials" => json_encode($this->socials),
        ]);

        if(isset($this->photo)){
            //delete current photo
            if(file_exists($this->expert->photo)){
                Storage::delete($this->expert->photo);
            }

            //upload photo
            $filename = $this->photo->store("uploads/experts","public_uploads");

            $this->expert->update([
                "photo" => $filename,
            ]);
        }

        return Redirect::route("experts.index")->with("success","Successfully updated expert!");

    }
}
