<?php

namespace App\Http\Controllers;
use App\Models\Professor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
    public function showLoginForm() {
        return view('professors.login');
    }

    public function showregisterForm() {
        return view('professors.register');
    }

    public function dashboard() {

        $page_name = 'الإحصائيات';
        $user_count = Professor::all()->count();
        return view('professors.dashboard',compact('page_name','user_count'));
    }

    public function profile() {
        return view('professors.profile',['page_name' => 'البروفايل']);
    }

    public function settings() {
        return view('professors.settings',['page_name' => 'الإعدادات']);
    }

    public function changePassword() {
        return view('professors.changePassword',['page_name' => 'تغيير كلمة السر']);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

    public function allbooking() {

    }


    public function allNotifications() {

    }


    public function showNotification() {

    }



}
