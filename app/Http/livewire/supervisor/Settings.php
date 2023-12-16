<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Supervisor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Settings extends Component
{
    use WithFileUploads;
    public $name='', $email='',$civil_number, $image, $phone='', $address='',$supervisor_id='';


    public function mount() {
        $this->supervisor_id = Auth::guard('supervisor')->user()->id;
        $this->name = Auth::guard('supervisor')->user()->name;
        $this->email = Auth::guard('supervisor')->user()->email;
        $this->civil_number = Auth::guard('supervisor')->user()->civil_number;
        $this->phone = Auth::guard('supervisor')->user()->phone;
        $this->address = Auth::guard('supervisor')->user()->address;

    }

    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'min' => 'لابد ان يكون الحقل مكون على الاقل من 8 خانات',
        'email' => 'هذا البريد الإلكترونى غير صحيح',
        'name.max' => 'لابد ان يكون الحقل مكون على الاكثر من 50 خانة',
        'email.unique' => 'هذا البريد الإلكترونى مسجل فى الموقع',
        'same' => 'لابد ان يكون كلمة السر متطابق',
        'image' => 'لابد ان يكون المف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'image.max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'regex' => 'لا بد ان يكون الحقل ارقام فقط',
        'max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
        'gt' => 'لابد ان تختار نوع الإعاقة',
        'civil_number.unique' => 'هذا الرقم المدنى مسجل فى الموقع',
        'civil_number.max' => 'لابد ان يكون الرقم المدنى 12 رقم',
        'civil_number.min' => 'لابد ان يكون الرقم المدنى 12 رقم'
    ];


    protected $rules = [
        'name' => ['required', 'string', 'max:50'],
        'phone' => ['required', 'string','regex:/^([0-9\s\-\+\(\)]*)$/','min:8','max:8'],
        'address' => ['required', 'string', 'max:255']
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
                    'email'   => ['required', 'email', "unique:supervisors,email," . $this->supervisor_id],
                    'civil_number'   => ['required', 'min:12','max:12','regex:/^([0-9\s\-\+\(\)]*)$/', "unique:supervisors,civil_number," . $this->supervisor_id],
                ]));
        if(!$this->image)
            Supervisor::whereId($this->supervisor_id)->update($validatedata);
        if($this->image) {
            $imagename = $this->image->getClientOriginalName();
            Supervisor::whereId($this->supervisor_id)->update(array_merge($validatedata,['image' => $imagename]));
            $path = '/images/supervisors/'.$this->supervisor_id;
            $dir = public_path('assets'.$path);
            if(file_exists($dir))
                File::deleteDirectories($dir);
            else
                mkdir($dir);
            $this->image->storeAs($path,$imagename);
            File::deleteDirectory(public_path('assets/livewire-tmp'));
        }
        session()->flash('message', "Your Profile Updated.");
        return redirect()->route('supervisor.profile');
    }

    public function render()
    {
        return view('livewire.supervisor.settings');
    }
}
