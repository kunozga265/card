<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AppController;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Livewire\Component;

class EditProject extends Component
{
    public $project, $title, $duration, $date, $active;
    public $funders = [];
    public $countries = [];
    public $implementers = [];
    public $collaborators = [];
    public $objectives = [];
    public $investigators = [];

    public function mount($project)
    {
        $this->title = $project->title;
        $this->duration = $project->duration;
        $this->active = $project->active;
        $this->date = date('Y-m-d',$project->date);

        $this->funders = json_decode($project->funders);
        $this->countries = json_decode($project->countries);
        $this->implementers = json_decode($project->implementers);
        $this->collaborators = json_decode($project->collaborators);
        $this->objectives = json_decode($project->objectives);
        $this->investigators = json_decode($project->investigators);
    }

    public function render()
    {
        return view('livewire.edit-project');
    }

    public function update()
    {
        $this->validate([
            'title'         =>  ['required'],
            'date'          =>  ['required'],
            'duration'      =>  ['required'],
//            'active'        =>  ['required'],
        ]);

//        $project = Project::find

        $this->project->update([
            "title" => $this->title,
            "slug" => Str::slug($this->title)."-".date("Y-m-d"),
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

        return Redirect::route("projects.index")->with("success","Successfully updated project!");
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
