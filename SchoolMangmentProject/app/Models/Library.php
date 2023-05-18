<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'is_available',
        'available_date',
        'img'
    ];
    public function library_student()
    {
        return $this->hasMany(Library_Student::class);
    }
}
