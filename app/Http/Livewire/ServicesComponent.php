<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $projects = Project::inRandomOrder()->paginate(12);
        return view('livewire.services-component',['projects' => $projects]);
    }
}