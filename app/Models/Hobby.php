<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class Hobby extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'image', 
        'description',
        'position',
    ];

}
