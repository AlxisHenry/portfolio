<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{

    use HasFactory;

    protected $fillable = ['LinkImage', 'AltImage'];

    protected $table = "news_images";
    protected $primaryKey = 'identifier';

}
