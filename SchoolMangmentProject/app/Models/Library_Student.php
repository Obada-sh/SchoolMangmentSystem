<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library_Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'book_date',
        'return_date',
        'library_id',
        'student_id'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function library()
    {
        return $this->belongsTo(Library::class);
    }
}
