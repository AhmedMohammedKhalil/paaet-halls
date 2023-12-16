<?php

namespace App\Http\Livewire\Professor;

use App\Models\Professor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email,$civil_number, $password, $confirm_password, $phone, $address;


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'civil_number'   => 'required|unique:professors,civil_number|max:12|min:12|regex:/^([0-9\s\-\+\(\)]*)$/',
        'email'   => 'required|email|unique:professors,email',
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
        $data = array_merge(
            $validatedData,
            ['password' => Hash::make($this->password)]
        );
        Professor::create($data);
        if(Auth::guard('professor')->attempt($validatedData)){
            session()->flash('message', "You are Register successful.");
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.professor.register');
    }
}
