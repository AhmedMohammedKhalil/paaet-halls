<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use Livewire\Component;

class Searching extends Component
{
    public $halls;
    public $flag = false;

    protected $listeners = [
        'showHalls',
    ];
    public function showHalls($halls) {
        $this->flag = true;
        if($halls) {
            $ids = [];
            foreach($halls as $hall) {
                $ids[] = $hall['id'];
            }
            $this->halls = Hall::find($ids);
        } else {
            $this->halls = '';
        }

    }

    public function render()
    {
        $this->halls = $this->flag == true ? $this->halls : Hall::all();
        return view('livewire.searching');
    }
}
