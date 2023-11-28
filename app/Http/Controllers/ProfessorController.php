<?php

namespace App\Http\Controllers;
use App\Models\Reserve;

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



    public function index() {
        $professors = Professor::all();
        return view('admins.professors.index',compact('professors'));
    }

    public function show(Request $r) {
        $professor = Professor::whereId($r->id)->first();
        return view('admins.professors.show',compact('professor'));
    }

    public function showTable(Request $r) {
        $events = [];
        $professorReserves = Reserve::where('professor_id',$r->id)->get();
        foreach($professorReserves as $reserve) {
            $events[] = [
                'title' => $reserve->professor->name,
                'start' => $reserve->start_at,
                'end'=> $reserve->end_at,
                'backgroundColor' => '#62442e',
                'borderColor' => '#62442e'
            ];
        }
        return view('table',compact('events'));
    }






}
