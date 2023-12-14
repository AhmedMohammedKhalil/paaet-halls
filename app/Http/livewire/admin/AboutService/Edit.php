<?php

namespace App\Http\Livewire\Admin\AboutService;

use Livewire\Component;
use App\Models\AboutService;

class Edit extends Component
{

    public $content,$title, $aboutservice;

    public function mount($aboutservice_id)
    {
        $this->aboutservice = AboutService::find($aboutservice_id);
        $this->content = $this->aboutservice->content;
        $this->title = $this->aboutservice->title;

    }
    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'content' => ['required', 'max:255'],
        'title' => ['required', 'max:255'],
    ];





    public function edit()
    {
        $validatedData = $this->validate();
        $this->aboutservice->update($validatedData);
        session()->flash('message', "تم إتمام العملية بنجاح");
        return redirect()->route('admin.about-service.index');
    }
    public function render()
    {
        return view('livewire.admin.about-service.edit');
    }
}
