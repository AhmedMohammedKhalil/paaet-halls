<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    public $table ='halls';
    protected $fillable = [
        'details', 'gender', 'number','capacity','cover','vedio'
    ];


    public function professors()
    {
        return $this->belongsToMany(Professor::class,'reserves','professor_id','hall_id')
        ->using(Reserve::class)->withPivot('id','status','start_at','end_at','date')->withTimestamps();
    }

    public function supervisor () {
        return $this->belongsTo(Supervisor::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function building() {
        return $this->belongsTo(Building::class);
    }
}
