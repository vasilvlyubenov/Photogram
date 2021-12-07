<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'text',
        'link',
        'seen',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}