<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=[
        'salary',
        'subject_id',
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

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function session()
    {
        return $this->hasMany(Session::class);
    }

}
