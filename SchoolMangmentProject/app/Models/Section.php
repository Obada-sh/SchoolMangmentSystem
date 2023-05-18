<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable=[
        'number',
        'exam_image',
        'saf_id'
    ];

    public function saf()
    {
        return $this->belongsTo(Saf::class);
    }

    public function programDay()
    {
        return $this->hasMany(ProgramDay::class);
    }

    public function homework()
    {
        return $this->hasMany(Homework::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
