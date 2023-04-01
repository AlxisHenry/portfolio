<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
		'company',
		'city',
		'image',
		'started_at',
		'ended_at',
		'is_current',
		'is_active'
	];

}
