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

class AdminEditProjectsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $price;
    public $image;
    public $newImage;
    public $featured;
    public $short_description;
    public $description;
    public $category_id;
    public $images;
    public $bgImage;
    public $newBgImage;
    public $duration;

    public function mount($project_slug){
        $project = Project::where('slug', $project_slug)->first();
        $this->name = $project->name;
        $this->slug = $project->slug;
        $this->price = $project->price;
        $this->image = $project->image;
        $this->bgImage = $project->bgImage;
        $this->duration = $project->duration;
        $this->featured = $project->featured;
        $this->short_description = $project->short_description;
        $this->description = $project->description;
        $this->category_id = $project->category_id;
        $this->project_id = $project->id;
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }
    public function updateProject(){
        $this->validate([
            'name' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);
        $project = Project::find($this->project_id);
        $project->name = $this->name;
        $project->slug = $this->slug;

        $project->price = $this->price;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp. '.'. $this->newImage->extension();
            $this->newImage->storeAs('projects',$imageName );
            $project->image = $imageName;
        }

        if ($this->newBgImage) {
            $imageName2 = Carbon::now()->timestamp. '.'. $this->newBgImage->extension();
            $this->newBgImage->storeAs('projectBG',$imageName2 );
            $project->bgImage = $imageName2;
        }


        if ($this->images) {
            $imagesName = "";
            foreach($this->images as $key=>$image){
                $imgName = Carbon::now()->timestamp. $key.'.'. $image->extension();
                $image->storeAs('projects', $imgName);
                $imagesName = $imageName . ',' . $imgName;
            }
            $project->images = $imagesName;
        }
        $project->featured = $this->featured;
        $project->duration = $this->duration;
        $project->short_description = $this->short_description;
        $project->description = $this->description;
        $project->save();
        session()->flash('message', 'Project has been updated successfully');
        return redirect()->route('admin.projects');
    }

    public function render()
    {
        $project = Project::where('slug',$this->slug)->first();
        $categories = Category::get();
        return view('livewire.admin-edit-projects-component',['project' =>$project, 'categories' => $categories])->layout('layouts.base');
    }
}