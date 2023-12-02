<?php

namespace App\Models;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{
    protected $guard = 'professor';
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password','phone','image','address'
    ];

    public function halls()
    {
        return $this->belongsToMany(Hall::class,'reserves','professor_id','hall_id')
        ->using(Reserve::class)->withPivot('id','start_at','end_at')->withTimestamps();
    }

    public function supervisors()
    {
        return $this->belongsToMany(Supervisor::class,'notifications','professor_id','supervisor_id')
        ->using(Notification::class)->withPivot('id','mark_as_read','type','author','content','book_id','hall_id')->withTimestamps();
    }

    public function notifications() {
        return $this->hasMany(Notification::class,'professor_id');
    }

    public function unreadNotifications() {
        return $this->notifications()->where('mark_as_read',0)->where('author','professor');
    }

    public function latestNotifications() {
        return $this->notifications()->where('author','professor')->latest();
    }



}
