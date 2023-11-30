<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class HallService extends Pivot
{
    protected $table = 'hall_services';
    use HasFactory;
    protected $fillable = ['hall_id','service_id'];

    public function hall() {
        return $this->belongsTo(Hall::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

}
