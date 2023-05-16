<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDay extends Model
{
    use HasFactory;
    protected $fillable=[
        'day',
        'section_id',
        'section_id'
    ];

    public function hessa()
    {
        return $this->hasMany(Hessa::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
