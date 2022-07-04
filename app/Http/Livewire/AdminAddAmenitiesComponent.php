<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Project;
use Livewire\Component;

class AdminAddAmenitiesComponent extends Component
{
    public $name;
    public $project_slug;
    public $project_id;

    public function mount($project_slug){
        $this->project_slug = $project_slug;
        $project = Project::where('slug', $project_slug)->first();
        $this->project_id = $project->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }

    public function addAmenity(){
        $this->validate([
            'name' => 'required',
        ]);
        $amenity = new Aminity();
        $amenity->project_id = $this->project_id;
        $amenity->name = $this->name;
        $amenity->save();
        session()->flash('message', 'Amenity has been created successfully');
        // return redirect()->route('admin.properties');
    }
    public function render()
    {
        $project = project::where('slug', $this->project_slug )->first();
        return view('livewire.admin-add-amenities-component', ['project' => $project])->layout('layouts.base');
    }
}
