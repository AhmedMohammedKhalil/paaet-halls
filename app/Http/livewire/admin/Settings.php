<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='',$civil_number, $email='', $image,$admin_id='';


    public function mount() {
        $this->admin_id = Auth::guard('admin')->user()->id;
        $this->name = Auth::guard('admin')->user()->name;
        $this->email = Auth::guard('admin')->user()->email;
        $this->civil_number = Auth::guard('admin')->user()->civil_number;

    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا البريد الإلكترونى غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'email.unique' => 'هذا البريد الإلكترونى مسجل فى الموقع',
        'same' => 'لابد ان يكون كلمة السر متطابق',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'civil_number.unique' => 'هذا الرقم المدنى مسجل فى الموقع',
        'civil_number.max' => 'لابد ان يكون الرقم المدنى 12 رقم',
        'civil_number.min' => 'لابد ان يكون الرقم المدنى 12 رقم'
    ];

    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    public function updatedImage()
    {
            $validatedata = $this->validate(
                ['image' => ['image','mimes:jpeg,jpg,png','max:2048']]
            );
    }

    public function edit() {
        $validatedata = $this->validate(
            array_merge(
                $this->rules,
                [
                    'email'   => ['required','email',"unique:admins,email,".$this->admin_id],
                    'civil_number'   => ['required', 'min:12','max:12','regex:/^([0-9\s\-\+\(\)]*)$/', "unique:admins,civil_number," . $this->admin_id],
                ],
        ));
        if(!$this->image)
            Admin::whereId($this->admin_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            Admin::whereId($this->admin_id)->update(array_merge($validatedata,['image' => $imagename]));
            $path = '/images/admins/'.$this->admin_id;
            $dir = public_path('assets'.$path);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs($path,$imagename);
            File::deleteDirectory(public_path('assets/livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('admin.profile');
    }

    public function render()
    {
        return view('livewire.admin.settings');
    }
}
