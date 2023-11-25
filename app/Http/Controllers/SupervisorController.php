<?php

namespace App\Http\Controllers;
use App\Models\Supervisor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupervisorController extends Controller
{
    public function showLoginForm() {
        return view('supervisors.login');
    }

    public function showregisterForm() {
        return view('supervisors.register');
    }

    public function dashboard() {

        $page_name = 'الإحصائيات';
        $user_count = Supervisor::all()->count();
        return view('supervisors.dashboard',compact('page_name','user_count'));
    }

    public function profile() {
        return view('supervisors.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('supervisors.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('supervisors.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }


}
