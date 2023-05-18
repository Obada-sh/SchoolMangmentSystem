<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'student_id'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
