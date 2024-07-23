<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AppController;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class NewProject extends Component
{
    public $title, $duration, $date, $active;
    public $funders = [];
    public $countries = [];
    public $implementers = [];
    public $collaborators = [];
    public $objectives = [];
    public $investigators = [];

    public function render()
    {
        return view('livewire.new-project');
    }

    public function store()
    {
        $this->validate([
            'title'         =>  ['required'],
            'date'          =>  ['required'],
            'duration'      =>  ['required'],
//            'active'        =>  ['required'],
        ]);

        Project::create([
            "title" => $this->title,
            "date" => (new AppController())->getTimestamp($this->date),
            "duration" => $this->duration,
            "active" => $this->active != null,
            "funders" => json_encode($this->funders),
            "countries" => json_encode($this->countries),
            "implementers" => json_encode($this->implementers),
            "collaborators" => json_encode($this->collaborators),
            "objectives" => json_encode($this->objectives),
            "investigators" => json_encode($this->investigators),
        ]);

        return Redirect::route("projects.index")->with("success","Successfully created project!");
    }

    public function addFunder()
    {
        $this->funders[]="";
    }

    public function removeFunder($key)
    {
        array_splice($this->funders,$key,1);
    }

    public function addCountry()
    {
        $this->countries[]="";
    }

    public function removeCountry($key)
    {
        array_splice($this->countries,$key,1);
    }

    public function addImplementer()
    {
        $this->implementers[]="";
    }

    public function removeImplementer($key)
    {
        array_splice($this->implementers,$key,1);
    }

    public function addCollaborator()
    {
        $this->collaborators[]="";
    }

    public function removeCollaborator($key)
    {
        array_splice($this->collaborators,$key,1);
    }

    public function addObjective()
    {
        $this->objectives[]="";
    }

    public function removeObjective($key)
    {
        array_splice($this->objectives,$key,1);
    }

    public function addInvestigator()
    {
        $this->investigators[]="";
    }

    public function removeInvestigator($key)
    {
        array_splice($this->investigators,$key,1);
    }
}
