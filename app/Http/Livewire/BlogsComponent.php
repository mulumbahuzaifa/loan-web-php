<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::paginate(6);
        $categories = Category::get();
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        $setting = Setting::find(1);
        return view('livewire.blogs-component',['blogs' => $blogs, 'l_blogs' => $l_blogs, 'setting' => $setting, 'categories' => $categories]);
    }
}