<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'price',
        'body',
        'counter',
        'teacher_id'
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function saf()
    {
        return $this->belongsTo(Saf::class);
    }
    public function Session_student()
    {
        return $this->hasMany(Session_student::class);
    }
}
