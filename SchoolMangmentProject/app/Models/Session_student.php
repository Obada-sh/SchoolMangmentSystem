<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session_student extends Model
{
    use HasFactory;
    protected $fillable=[
        'status',
        'student_id',
        'session_id'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
