<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_in_bus',
        'left_for_bus',
        'left_for_qusat'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
