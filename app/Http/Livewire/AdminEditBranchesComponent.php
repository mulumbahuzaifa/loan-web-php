<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;

class AdminEditBranchesComponent extends Component
{
    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $whatsapp;
    public $district;
    public $box_mail;
    public $branch_id;

    public function mount($address){
        $branch = Branch::where('address', $address)->first();
         $this->email =$branch->email;
         $this->phone =$branch->phone;
         $this->phone2 =$branch->phone2;
         $this->address =$branch->address;
         $this->whatsapp =$branch->whatsapp;
         $this->district =$branch->district;
         $this->box_mail =$branch->box_mail;
         $this->branch_id = $branch->id;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'district' => 'required',
            'box_mail' => 'required',
        ]);
    }

    public function updateBranch(){
        $this->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'district' => 'required',
            'box_mail' => 'required',
        ]);

        $branch = Branch::find($this->branch_id);
        $branch->email = $this->email;
        $branch->phone = $this->phone;
        $branch->phone2 = $this->phone2;
        $branch->address = $this->address;
        $branch->whatsapp = $this->whatsapp;
        $branch->district = $this->district;
        $branch->box_mail = $this->box_mail;
        $branch->save();
        session()->flash('message', 'Branch has been updated Successfully');
    }

    public function render()
    {
        return view('livewire.admin-edit-branches-component');
    }
}