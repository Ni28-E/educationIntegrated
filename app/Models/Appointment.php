<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'datetime',
        'location',
        'coach_id',
        'travel_time',
        'duration',
        'alert',
        'user_id'

];

        public function coach()
        {
            return $this->belongsTo(Coach::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
