<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Notification extends Pivot
{
    use HasFactory;

    protected $table = 'notifications';
    protected $fillable = ['type','content','author','date','hall_id','supervisor_id','professor_id'];


    public function hall() {
        return $this->belongsTo(Hall::class);
    }

    public function professor() {
        return $this->belongsTo(Professor::class);
    }

    public function supervisor() {
        return $this->belongsTo(Supervisor::class);
    }
}
