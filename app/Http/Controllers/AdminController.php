<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Service;
use App\Models\Building;
use App\Models\Contact;
use App\Models\Professor;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admins.login');
    }

    public function dashboard() {
        $professor_count = Professor::all()->count();
        $supervisor_count = Supervisor::all()->count();
        $building_count = Building::all()->count();
        $hall_count = Hall::all()->count();
        $service_count = Service::all()->count();
        $contact_count= Contact::all()->count();

    return view('admins.dashboard',compact('professor_count','supervisor_count','building_count','hall_count','service_count','contact_count'));
    }

    public function profile() {
        return view('admins.profile');
    }

    public function settings() {
        return view('admins.settings');
    }

    public function changePassword() {
        return view('admins.changePassword');
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }
}
