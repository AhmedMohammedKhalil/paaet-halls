<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Supervisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email,$civil_number, $password, $confirm_password, $phone, $address ,$is_approved;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'email'   => 'required|email|unique:supervisors,email',
        'civil_number'   => 'required|unique:supervisors,civil_number|max:12|min:12|regex:/^([0-9\s\-\+\(\)]*)$/',
        'password' => ['required', 'string', 'min:8'],
        'confirm_password' => ['required', 'string', 'min:8','same:password'],
        'address' => ['required', 'string', 'max:255'],

    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا البريد الإلكترونى غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'email.unique' => 'هذا البريد الإلكترونى مسجل فى الموقع',
        'same' => 'لابد ان يكون كلمة السر متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gt' => 'لابد ان تختار نوع الإعاقة',
        'civil_number.unique' => 'هذا الرقم المدنى مسجل فى الموقع',
        'civil_number.max' => 'لابد ان يكون الرقم المدنى 12 رقم',
        'civil_number.min' => 'لابد ان يكون الرقم المدنى 12 رقم'
    ];


    public function register(){
        $validatedData = $this->validate();
        $is_approved="انتظار";
        $data = array_merge(
            $validatedData,
            [
                'password' => Hash::make($this->password),
                'is_approved'=> $is_approved
            ]
        );
        Supervisor::create($data);
        // if(Auth::guard('supervisor')->attempt($validatedData)){
        //     session()->flash('message', "You are Login successful.");
        //     return redirect()->route('home');
        // }
        return redirect()->route('supervisor.approval');
    }

    public function render()
    {
        return view('livewire.supervisor.register');
    }
}
