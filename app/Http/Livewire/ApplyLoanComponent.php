<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ApplyLoanComponent extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $city;
    public $location;
    public $country;
    public $category;
    public $price;
    public $rate;
    public $installments;
    public $message;

    public $thankyou;

    public function updated($fields){
        $this->validateOnly($fields, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'city' => 'required',
            'location' => 'required',
            'country' => 'required',
            'category' => 'required',
            'price' => 'required',
            'rate' => 'required',
            'message' => 'required',
            'installments' => 'required'
        ]);
    }

    public function placeOrder(){
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'city' => 'required',
            'location' => 'required',
            'country' => 'required',
            'category' => 'required',
            'price' => 'required',
            'rate' => 'required',
            'message' => 'required',
            'installments' => 'required'
        ]);
        // $project = Project::where('slug', $this->slug)->first();
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->category = $this->category;
        $order->price = $this->price;
        $order->rate = $this->rate;
        $order->message = $this->message;
        $order->installments = $this->installments;
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->city = $this->city;
        $order->location = $this->location;
        $order->country = $this->country;
        $order->save();
        session()->flash('message', 'Your Application has been sent successfully');
        return redirect()->route('thankyou');
        $this->thankyou = 1;
        // session()->forget('checkout');

        // $this->sendOrderConfirmationMail($order);
    }

    // public function sendOrderConfirmationMail($order){
    //     Mail::to($order->email)->send(new OrderMail($order));
    // }


    public function verifyForCheckout(){
        if(!Auth::check()){
            return redirect()->route('login');
        }
        else if($this->thankyou){
            return redirect()->route('thankyou');
        }

    }
    public function render()
    {
        $category = Category::where('slug', 'loan')->first();
        $category_id = $category->id;

        $categories = Category::get();
        $loans =  Project::where('category_id', $category_id  )->get();
        $setting = Setting::find(1);

        return view('livewire.apply-loan-component',['setting' => $setting, 'categories' => $categories, 'loans' => $loans]);
    }
}