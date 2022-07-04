<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $category = Category::where('slug', 'loan')->first();
        $category_id = $category->id;


        $loans =  Project::where('category_id', $category_id  )->inRandomOrder()->paginate(12);
        $categories = Category::get();
        return view('livewire.projects-component',['loans' => $loans, 'categories' => $categories]);
    }
}