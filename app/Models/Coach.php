<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'coach_category', 'coach_id', 'category_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
