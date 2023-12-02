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

    public function buildings () {
        return $this->hasMany(Building::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class,'supervisor_id');
    }

    public function unreadNotifications() {
        return $this->notifications()->where('mark_as_read',0)->where('author','supervisor');
    }
    public function latestNotifications() {
        return $this->notifications()->where('author','supervisor')->latest();
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class,'notifications','supervisor_id','professor_id')
        ->using(Notification::class)->withPivot('id','mark_as_read','type','author','content','book_id','hall_id')->withTimestamps();
    }
}
