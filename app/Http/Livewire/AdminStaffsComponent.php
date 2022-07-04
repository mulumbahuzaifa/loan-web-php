<?php

namespace App\Http\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithPagination;

class AdminStaffsComponent extends Component
{
    public function deleteStaff($id){
        $staff = Staff::find($id);
        $staff->delete();
        session()->flash('message', 'Staff has been deleted successfully');
    }
    use WithPagination;
    public function render()
    {
        $staffs = Staff::paginate(6);
        return view('livewire.admin-staffs-component', ['staffs' => $staffs]);
    }
}