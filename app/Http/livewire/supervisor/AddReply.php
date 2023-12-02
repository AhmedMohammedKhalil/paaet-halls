<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;
use App\Models\Notification;
use App\Http\Livewire\Professor\NotificationsCount;

class AddReply extends Component
{
    public $hall,$booking,$content,$notification,$type;

    public function mount($id) {

        $this->notification = Notification::find($id);
    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'type' => ['required'],
        'content' => ['required', 'string', 'max:255']
    ];


    public function add() {
        $validatedData = $this->validate();
        $validatedData = array_merge($validatedData,[
            'hall_id' => $this->notification->hall_id,
            'book_id' => $this->notification->book_id,
            'author' => 'professor',
            'professor_id' => $this->notification->professor_id,
            'supervisor_id' => auth('supervisor')->user()->id
        ]);

        $notification = Notification::create($validatedData);
        $this->notification->mark_as_read = 1;
        $this->notification->save();
        $this->emitTo(NotificationsCount::class,'refreshCount',$notification);

        return redirect()->route('supervisor.allnotifications');
    }
    public function render()
    {
        return view('livewire.supervisor.add-reply');
    }
}
