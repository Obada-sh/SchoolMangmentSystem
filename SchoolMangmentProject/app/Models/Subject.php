<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'saf_id'
    ];
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
    public function saf()
    {
        return $this->belongsTo(Saf::class);
    }
}
