<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class EditService extends Component
{

    public $name,$service;

    public function mount($service_id) {
        $this->service = Service::whereId($service_id)->first();
        $this->name = $this->service->name;
    }

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
    ];

    public function edit() {
        $validatedData = $this->validate();
        $this->service->update($validatedData);
        session()->flash('message', "Service Updated Successfully.");
        return redirect()->route('admin.service.index');
    }
    public function render()
    {
        return view('livewire.admin.edit-service');
    }
}
