<?php

namespace App\Http\Controllers;
use App\Models\Hall;
use App\Models\Notification;
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

        return view('professors.halls.allbookings');
    }

    public function changeHall(Request $r){
        $initialhall = Hall::find($r->hall_id);
        $booking = Reserve::find($r->booking_id);
        $start_at = $booking->start_at;
        $end_at = $booking->end_at;
        $services = $initialhall->services->pluck('id');


        $searchedhalls = Hall::where('capacity',$initialhall->capacity)
                                        ->where('gender',$initialhall->gender)
                                        ->where('id','!=',$initialhall->id);

        $availableHalls = $searchedhalls->whereDoesntHave('reserves', function ($query) use ($start_at, $end_at) {
            $query->where(function ($subQuery) use ($start_at, $end_at) {
                $subQuery->where('start_at', '<', $end_at)
                            ->where('end_at', '>', $start_at);
            });
        })->get();

        $halls = $availableHalls->filter(function ($hall) use ($services) {
            return $hall->services->pluck('id')->intersect($services)->count() === count($services);
        });
        $booking_id = $r->booking_id;

        return view('showrecommendedhalls',compact('halls','booking_id','start_at','end_at'));

    }

    public function addReport(Request $r){
        $hall = Hall::find($r->hall_id);
        $booking = Reserve::find($r->booking_id);
        return view('professors.add-report',compact('hall','booking'));
    }

    public function allreports(){
        $professor = Professor::find(auth('professor')->user()->id);
        $reports = Notification::where('professor_id',$professor->id)->where('author','supervisor')->get();
        //$hall = Hall::find($professor-);
        //$booking = Reserve::find($r->booking_id);
        return view('professors.all-reports',compact('reports'));
    }

    public function professorShowHall(Request $r)
    {
        $hall = Hall::whereId($r->id)->first();
        $search = '';
        $booking_id = $r->booking_id;

        return view('professors.halls.showhall',compact('hall','search','booking_id'));
    }

    public function showMyTable() {
        $events = [];
        $professorReserves = Reserve::where('professor_id',auth('professor')->user()->id)->get();
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

    public function reserveHall(Request $r) {
        $start_at = $r->start_at;
        $end_at = $r->end_at;

        Professor::find(auth('professor')->user()->id)->halls()->attach($r->id,['start_at'=>$start_at,'end_at'=>$end_at]);
        return redirect()->route('professor.allbooking');
    }


    public function changeReserveHall(Request $r){
        $start_at = $r->start_at;
        $end_at = $r->end_at;
        Professor::find(auth('professor')->user()->id)->halls()->attach($r->id,['start_at'=>$start_at,'end_at'=>$end_at]);
        Notification::where('book_id',$r->booking_id)->delete();
        Reserve::whereId($r->booking_id)->delete();
        return redirect()->route('professor.allbooking');
    }


    public function allNotifications() {
        return view('professors.notifications.index');

    }


    public function showNotification(Request $r) {

        $notification = Notification::find($r->id);
        $booking = Reserve::find($notification->book_id);
        $notification->mark_as_read = 1;
        $notification->save();
        return view('professors.notifications.show',compact('notification','booking'));
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
