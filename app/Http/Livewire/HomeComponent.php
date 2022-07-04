<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{

    public function checkout(){
        if (Auth::check()) {
            return redirect()->route('apply');
        }else{
            return redirect()->route('login');
        }
    }
    public function render()
    {
        $category = Category::where('slug', 'loan')->first();
        $category_id = $category->id;


        $categories = Category::get();
        $blogs = Blog::orderBy('created_at', 'DESC')->limit(3)->get();
        $loans =  Project::where('category_id', $category_id  )->inRandomOrder()->limit(3)->get();
        $projects = Project::inRandomOrder()->limit(8)->get();
        $setting = Setting::find(1);
        return view('livewire.home-component',['categories' => $categories,'loans' => $loans, 'blogs' => $blogs, 'projects' => $projects, 'setting' => $setting]);
    }
}