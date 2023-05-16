<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saf extends Model
{
    use HasFactory;
    protected $fillable=[
        'grade'
    ];

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }

    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
