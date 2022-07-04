<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProjectsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $featured;
    public $short_description;
    public $description;
    public $category_id;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function mount(){
        $this->featured = 0;
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }
    public function addProject(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);
        $project = new Project();
        $project->name = $this->name;
        $project->slug = $this->slug;
        $project->category_id = $this->category_id;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('projects',$imageName );
        $project->image = $imageName;
        $project->featured = $this->featured;
        $project->short_description = $this->short_description;
        $project->description = $this->description;
        $project->save();
        session()->flash('message', 'Service has been created successfully');
        return redirect()->route('admin.projects');
    }


    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin-add-projects-component',['categories' => $categories])->layout('layouts.base');
    }
}