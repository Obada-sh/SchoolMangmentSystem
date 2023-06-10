<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'salary',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hessa()
    {
        return $this->hasMany(Hessa::class);
    }

    public function session()
    {
        return $this->hasMany(Session::class);
    }

    public function subjects_has_teacher()
    {
        return $this->hasMany(Teacher::class);
    }

}
