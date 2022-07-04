<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Project;
use Livewire\Component;

class AdminAmenitiesComponent extends Component
{
    public $project_slug;

    public function mount($project_slug){
        $this->project_slug = $project_slug;
        // $project = Project::where('slug', $project_slug)->first();
    }

    public function deleteAmenity($id){
        $amenity = Aminity::find($id);
        $amenity->delete();
        session()->flash('message', 'Amenity has been deleted successfully');
    }

    public function render()
    {
        $project = Project::where('slug',$this->project_slug)->first();
        $aminities = Aminity::where('project_id', $project->id)->get();

        return view('livewire.admin-amenities-component', ['aminities' => $aminities, 'project' => $project])->layout('layouts.base');
    }
}
