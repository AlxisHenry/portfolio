<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'author',
        'link',
    ];
       
    public function scopeSpoilers($query) 
    {
        return $query->latest()->limit(2)->get();
    }

}
