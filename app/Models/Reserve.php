<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reserve extends Pivot
{
    protected $table = 'reserves';
    use HasFactory;

    protected $fillable = ['start_at','end_at','hall_id','professor_id'];
    public function hall() {
        return $this->belongsTo(Hall::class);
    }

    public function professor() {
        return $this->belongsTo(Professor::class);
    }

}
