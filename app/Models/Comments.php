<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text',
    ];
    
    //създаваме релацията с Post класа
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
    //създаваме релацията с User класа
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
