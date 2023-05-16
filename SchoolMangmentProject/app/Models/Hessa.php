<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hessa extends Model
{
    use HasFactory;
    protected $fillable=[
        'time',
        'teacher_id',
        'program_day_id'
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function programDay()
    {
        return $this->belongsTo(ProgramDay::class);
    }
}
