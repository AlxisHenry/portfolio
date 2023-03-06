<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'link', 
        'description', 
        'github', 
        'image', 
        'languages', 
        'published_at',
    ];

    public function scopeSpoilers($query) 
    {
        return $query->latest()->limit(2)->get();
    }

}
