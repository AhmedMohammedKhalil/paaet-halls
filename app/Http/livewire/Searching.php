<?php

namespace App\Http\Livewire;

use App\Models\Hall;
use Livewire\Component;

class Searching extends Component
{
    public $halls,$start_at,$end_at,$booking_id;
    public $flag = false;

    protected $listeners = [
        'showHalls',
    ];
    public function showHalls($halls,$start_at,$end_at,$booking_id) {

        $this->flag = true;
        if($halls) {
            $ids = [];
            foreach($halls as $hall) {
                $ids[] = $hall['id'];
            }
            $this->halls = Hall::find($ids);
            $this->start_at = $start_at;
            $this->end_at = $end_at;
            $this->booking_id = $booking_id;
        } else {
            $this->halls = '';
        }

    }

    public function render()
    {
        $this->halls = $this->flag == true ? $this->halls : '';
        return view('livewire.searching');
    }
}
