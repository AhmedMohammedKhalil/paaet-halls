<?php

namespace App\Http\Livewire\Supervisor;

use Livewire\Component;

class Notifications extends Component
{

    public $notifications, $flag = false;
    public function mount() {
        $this->notifications = null;
        //$this->notifications = auth('supervisor')->user()->latestNotifications;
    }

    protected $listeners = [
        'refreshNotifiction',
        'refreshComponent' => 'getNotifications'

    ];
    public function refreshNotifiction() {
        $this->flag = true;
        $this->notifications = auth('supervisor')->user()->latestNotifications;
        $this->emitSelf('refreshComponent');

    }

    public function getNotifications() {
        $this->notifications = auth('supervisor')->user()->latestNotifications;
    }

    public function render()
    {
        if($this->flag == false) {
            $this->notifications = auth('supervisor')->user()->latestNotifications;
        }
        return view('livewire.supervisor.notifications');
    }
}
