<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
class Login extends Component
{


    public $email;
    public $password;

    protected $rules = [
        'email'   => 'required|email|exists:admins,email',
        'password' => 'required|min:8'
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا البريد الألكتروني غير صحيح',
        'exists' => 'هذا البريد الألكتروني غير مسجل فى الموقع',

    ];

    public function login(){
        $validatedData = $this->validate();
        if(Auth::guard('admin')->attempt($validatedData)){

            session()->flash('message', "تم دخولك ينجاح");
            return redirect()->route('home');
        }else{
            session()->flash('error', 'هناك خطا فى البريد الألكتروني او كلمة المرور');
        }
    }
    public function render()
    {
        return view('livewire.admin.login');
    }
}
