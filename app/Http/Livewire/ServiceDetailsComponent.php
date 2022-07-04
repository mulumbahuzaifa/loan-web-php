<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceDetailsComponent extends Component
{
    use WithPagination;
    public $category_slug;

    public function mount($slug){
        $this->category_slug = $slug;
    }
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;


        $categories = Category::get();
        $projects =  Project::where('category_id', $category_id  )->paginate(12);
        return view('livewire.service-details-component',['projects' => $projects, 'categories' => $categories, 'category_name'=> $category_name]);
    }
}