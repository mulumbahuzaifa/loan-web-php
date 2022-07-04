<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;

class AdminAddStaffComponent extends Component
{
    public $name;
    public $position;
    public $branch;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'position' => 'required',
            'branch' => 'required',
        ]);
    }
    public function storeStaff(){
        $this->validate([
            'name' => 'required',
            'position' => 'required',
            'branch' => 'required',
        ]);

        $staff = new Staff();
        $staff->name = $this->name;
        $staff->position = $this->position;
        $staff->branch = $this->branch;
        $staff->save();
        session()->flash('message', 'Staff has been created Successfully');
    }

    public function render()
    {
        return view('livewire.admin-add-staff-component');
    }
}