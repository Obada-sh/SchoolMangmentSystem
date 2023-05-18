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
        'left_for_qusat',
        'user_id',
        'parent_id',
        'section_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function childParent()
    {
        return $this->belongsTo(ChildParent::class);
    }

    public function mark()
    {
        return $this->hasMany(Mark::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function absence()
    {
        return $this->hasMany(Absence::class);
    }

    public function library_student()
    {
        return $this->hasMany(Library_Student::class);
    }

    public function Session_student()
    {
        return $this->hasMany(Session_student::class);
    }
}
