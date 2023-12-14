<?php

namespace App\Http\Livewire\Admin\AboutService;

use App\Models\AboutService;
use Livewire\Component;

class Add extends Component
{

    public $content,$title;

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
    ];

    public function add()
    {
        $validatedData = $this->validate();
        AboutService::create($validatedData);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about-service.index');
    }
    public function render()
    {
        return view('livewire.admin.about-service.add');
    }
}
