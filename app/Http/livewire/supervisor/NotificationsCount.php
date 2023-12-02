<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;
use App\Http\Livewire\Supervisor\Notifications;

class NotificationsCount extends Component
{

    public $count;
    public $flag = false;

    public function mount() {
        $this->count = null;
        //$this->count = auth('supervisor')->user()->unreadNotifications->count();
    }
    protected $listeners = [
        'refreshCount','refreshCountNotification',
        'refreshComponent' => 'getNotifications'
    ];
    public function refreshCount($notification) {
        if(auth('supervisor')->user()->id == $notification->supervisor_id) {
            $this->flag = true;
            $this->count = auth('supervisor')->user()->unreadNotifications->count();
            $this->emitTo(Notifications::class,'refreshNotifiction');
            $this->emitSelf('refreshComponent');
        }
    }

    public function refreshCountNotification() {
            $this->flag = true;
            $this->count = auth('supervisor')->user()->unreadNotifications->count();
            $this->emitSelf('refreshComponent');
    }


    public function getNotifications() {
        $this->count = auth('supervisor')->user()->unreadNotifications->count();
    }

    public function render(){

        if($this->flag == false) {
            $count = auth('supervisor')->user()->unreadNotifications->count();
            $this->count = $count > 0 ? $count : null;
        }
        //$count = auth('supervisor')->user()->unreadNotifications->count();
        //$this->count = $count > 0 ? $count : null;
        return view('livewire.supervisor.notifications-count');
    }
}
