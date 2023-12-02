<?php

namespace App\Http\Livewire\Professor;

use Livewire\Component;

class Notifications extends Component
{

    public $notifications,$flag = false;



    protected $listeners = [
        'refreshNotifiction',
        'refreshComponent' => 'getNotifications'

    ];
    public function refreshNotifiction() {
            $this->flag = true;
            $this->notifications = auth('professor')->user()->latestNotifications;
            $this->emitSelf('refreshComponent');


    }

    public function getNotifications() {
        $this->notifications = auth('professor')->user()->latestNotifications;
    }

    public function render()
    {
        if($this->flag == false) {
            $this->notifications = auth('professor')->user()->latestNotifications;
        }
        return view('livewire.professor.notifications');
    }
}
