<?php

namespace App\Http\Livewire\Professor;

use Livewire\Component;

class NotificationsCount extends Component
{

    public $count;
    public $flag = false;


    protected $listeners = [
        'refreshCount','refreshCountNotification',
        'refreshComponent' => 'getNotifictions'

    ];
    public function refreshCount($notification) {
        if(auth('professor')->user()->id == $notification->professor_id) {
            $this->flag = true;
            $this->count = auth('professor')->user()->unreadNotifications->count();
            $this->emitTo(Notifications::class,'refreshNotifiction');
            $this->emitSelf('refreshComponent');
        }
    }

    public function getNotifications() {
        $this->count = auth('professor')->user()->unreadNotifications->count();
    }

    public function refreshCountNotification() {
        $this->flag = true;
            $this->count = auth('professor')->user()->unreadNotifications->count();
            $this->emitSelf('refreshComponent');

    }
    public function render()
    {
        if($this->flag == false) {
            $count = auth('professor')->user()->unreadNotifications->count();
            $this->count = $count > 0 ? $count : null;
        }
        return view('livewire.professor.notifications-count');
    }
}
