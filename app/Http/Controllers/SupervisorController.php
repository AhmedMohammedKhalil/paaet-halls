<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Reserve;

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

    public function index() {
        $supervisors = Supervisor::all();
        return view('admins.supervisors.index',compact('supervisors'));

    }

    public function accept(Request $r) {
        Supervisor::whereId($r->id)->update(['is_approved' => 'تمت الموافقة']);
        return redirect()->route('admin.supervisor.index');

    }

    public function reject(Request $r) {
        Supervisor::whereId($r->id)->update(['is_approved' => 'تمت الرفض']);
        return redirect()->route('admin.supervisor.index');
    }

    public function show(Request $r) {
        $supervisor = Supervisor::whereId($r->id)->first();
        return view('admins.supervisors.show',compact('supervisor'));
    }







}
