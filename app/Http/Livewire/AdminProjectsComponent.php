<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class AdminProjectsComponent extends Component
{
    public function deleteProject($id){
        $project = Project::find($id);
        $project->delete();
        session()->flash('message', 'Project has been deleted successfully');
    }
    public function render()
    {
        $projects = Project::paginate(12);
        return view('livewire.admin-projects-component', ['projects' => $projects])->layout('layouts.base');
    }
}