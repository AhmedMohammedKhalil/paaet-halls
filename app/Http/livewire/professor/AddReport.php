<?php

namespace App\Http\Livewire\Professor;

use App\Models\Notification;
use App\Http\Livewire\Supervisor\NotificationsCount;
use Livewire\Component;

class AddReport extends Component
{

    public $hall,$booking,$content;

    public function mount($hall,$booking) {
        $this->hall = $hall;
        $this->booking = $booking;
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [

        'content' => ['required', 'string', 'max:255']
    ];


    public function add() {
        $validatedData = $this->validate();
        $validatedData = array_merge($validatedData,[
            'hall_id' => $this->hall->id,
            'book_id' => $this->booking->id,
            'author' => 'supervisor',
            'supervisor_id' => $this->hall->supervisor_id,
            'professor_id' => auth('professor')->user()->id
        ]);

        $notification = Notification::create($validatedData);
        $this->emitTo(NotificationsCount::class,'refreshCount',$notification);

        return redirect()->route('professor.allreports');
    }

    public function render()
    {
        return view('livewire.professor.add-report');
    }
}
