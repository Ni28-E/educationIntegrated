<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public function analytic()
    {
        return $this->hasMany(Analytic::class);
    }
    public function user()
        {
            return $this->belongsTo(User::class);
        }

}
