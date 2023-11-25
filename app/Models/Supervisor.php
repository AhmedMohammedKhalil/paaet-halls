<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Authenticatable
{
    protected $guard = 'supervisor';
    public  $table='supervisors';
    protected $fillable = [
        'name', 'email', 'password','phone','image','is_approved','address'
    ];

    use HasFactory;


    public function halls () {
        return $this->hasMany(Hall::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class,'notifications','supervisor_id','professor_id')
        ->using(Notification::class)->withPivot('id','type','content','date','author')->withTimestamps();
    }
}
