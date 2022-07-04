<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBranchesComponent extends Component
{
    public function deleteBranch($id){
        $branch = Branch::find($id);
        $branch->delete();
        session()->flash('message', 'Branch has been deleted successfully');
    }
    use WithPagination;
    public function render()
    {
        $branches = Branch::paginate(6);
        return view('livewire.admin-branches-component', ['branches' => $branches]);
    }
}