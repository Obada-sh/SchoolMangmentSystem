<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $fillable=[
        'teacher_name',
        'subject',
        'body',
        'section_id'
    ];

    public function section()
    {
        return $this->belongsTo (Section::class);
    }
}
