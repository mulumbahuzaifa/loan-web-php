<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\Staff;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $staffs = Staff::get();
        $branches = Branch::get();
        return view('livewire.about-component', ['staffs' => $staffs,'branches' => $branches ]);
    }
}