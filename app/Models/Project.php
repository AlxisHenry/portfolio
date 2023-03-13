<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

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

    public function scopeSpoilers(Builder $query): Collection
    {
        return $query->latest()->limit(2)->get();
    }

}
