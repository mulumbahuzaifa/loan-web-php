<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Category;
use App\Models\Project;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProjectDetailsComponent extends Component
{
    public $slug;
    public $comment;
    public $project_id;


    public function mount($slug){
        $this->slug = $slug;
    }

    public function checkout(){
        if (Auth::check()) {
            return redirect()->route('apply');
        }else{
            return redirect()->route('login');
        }
    }




    public function render()
    {
        $project = Project::where('slug', $this->slug)->first();
        $categories = Category::get();
        $setting = Setting::find(1);
        $aminities = Aminity::where('project_id', $project->id)->get();
        $related_projects = Project::where('category_id', $project->category_id)->inRandomOrder()->limit(8)->get();
        return view('livewire.project-details-component',['project' =>$project, 'related_projects' => $related_projects, 'aminities' => $aminities, 'categories' => $categories, 'setting' => $setting]);
    }
}