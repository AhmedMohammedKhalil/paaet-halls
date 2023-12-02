<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Notification extends Pivot
{
    use HasFactory;

    protected $table = 'notifications';
    protected $fillable = ['mark_as_read','content','type','author','book_id','hall_id','supervisor_id','professor_id'];


    public function hall() {
        return $this->belongsTo(Hall::class);
    }

    public function professor() {
        return $this->belongsTo(Professor::class);
    }

    public function supervisor() {
        return $this->belongsTo(Supervisor::class);
    }

    public function reserve() {
        return $this->belongsTo(Reserve::class,'book_id');
    }
}
