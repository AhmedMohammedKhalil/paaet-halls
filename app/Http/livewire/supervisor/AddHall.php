<?php

namespace App\Http\Livewire\Supervisor;

use App\Models\Hall;
use App\Models\Service;
use Livewire\Component;
use App\Models\Building;
use App\Models\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AddHall extends Component
{

    use WithFileUploads;

    public $details, $gender, $number,$buildings,$building_id, $supervisor_id, $capacities, $capacity, $cover, $video, $servicesModel, $services, $images=[];

    public function mount() {
        $this->servicesModel = Service::all();
        $this->capacities =[
            '0 - 50',
            '50 - 100',
            '100 - 150',
            '150 - 200',
            '200 - 250',
            '250 - 300',
            'اكبر من 300'
        ];
        $this->supervisor_id = auth('supervisor')->user()->id;
        $this->buildings = Building::where('supervisor_id',$this->supervisor_id)->get();
        $this->gender = 'بنين';
        $this->capacity = $this->capacities[0];
        $building = Building::where('supervisor_id',$this->supervisor_id)->first();
        $this->building_id = $building->id;
    }


    protected $messages = [
        'required' => 'ممنوع ترك الحقل فارغاَ',
        'image' => 'لابد ان يكون الملف صورة',
        'mimes' => 'لابد ان يكون الصورة jpeg,jpg,png',
        'max' => 'يجب ان تكون الصورة اصغر من 2 ميجا',
        'video.mimes' => 'لابد ان يكون الفيديو mp4,mkv,flv',
        'video.max' => 'يجب ان تكون الفيديو اصغر من 100 ميجا',
        'details.max' => 'لابد ان يكون الحقل مكون على الاكثر من 255 خانة',
    ];

    protected $rules = [
        'number' => ['required'],
        'gender' => ['required', 'string'],
        'capacity' => ['required', 'string'],
        'details' => ['required', 'max:255'],
        'supervisor_id' => ['required'],
        'building_id' => ['required'],
        'services' => ['required'],
        'cover' => ['required','image', 'mimes:jpeg,jpg,png', 'max:2048']
    ];

    public function updatedVideo()
    {
        $validatedata = $this->validate(
            ['video' => ['mimes:mp4,mkv,flv', 'max:102400']]
        );
    }
    public function updatedImages()
    {
        $validatedata = $this->validate(
            ['images.*' => ['image', 'mimes:jpeg,jpg,png', 'max:2048']]
        );
    }


    public function add(){
        $validatedData = $this->validate();
        unset($validatedData['services']);
        $imagename = $this->cover->getClientOriginalName();
        $hall = Hall::create(array_merge($validatedData,['cover'=> $imagename]));
        $hall->services()->attach($this->services);
        $path = '/images/halls/'.$hall->id;
        $dir = public_path('assets'.$path);
        if(file_exists($dir)) {
            File::deleteDirectories($dir);
        }
        else {
            mkdir($dir);
        }
        mkdir($dir.'/cover');
        mkdir($dir.'/video');
        mkdir($dir.'/images');
        $this->cover->storeAs($path.'/cover',$imagename);
        if($this->video) {
            $videoname = $this->video->getClientOriginalName();
            $hall->update(array_merge($validatedData,['cover'=> $imagename,'video'=>$videoname]));
            $this->video->storeAs($path.'/video',$videoname);
        }
        if(isset($this->images) && count($this->images) > 0) {
            foreach($this->images as $image) {
                $imageName = $image->getClientOriginalName();
                $img = Image::create([
                    'image'=>$imageName,'hall_id'=>$hall->id
                ]);
                if(file_exists($dir.'/images/'.$img->id)) {
                    File::deleteDirectories($dir.'/images/'.$img->id);
                }
                else {
                    mkdir($dir.'/images/'.$img->id);
                }
                $image->storeAs($path.'/images/'.$img->id,$imageName);
            }
        }
        File::deleteDirectory(public_path('assets/livewire-tmp'));
        session()->flash('message', "Hall Added Succefully");
        return redirect()->route('supervisor.hall.index');
    }
    public function render()
    {
        return view('livewire.supervisor.add-hall');
    }
}
