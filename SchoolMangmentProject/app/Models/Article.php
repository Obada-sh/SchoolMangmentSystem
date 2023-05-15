<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable=[
        'body',
        'title',
        'media',
        'is_img',
        'sender'
    ];

    public function user()
    {
        return  $this->belongsTo(User::class);
    }



    
}
