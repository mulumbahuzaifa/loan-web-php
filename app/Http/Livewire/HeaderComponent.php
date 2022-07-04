<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HeaderComponent extends Component
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
        $category_name = $category->name;


        $categories = Category::get();
        $loans =  Project::where('category_id', $category_id  )->get();
        $setting = Setting::find(1);
        return view('livewire.header-component',['setting' => $setting, 'categories' => $categories, 'loans' => $loans]);
    }
}