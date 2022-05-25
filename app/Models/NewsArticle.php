<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'introduction', 'UrlArticle'];

    protected $table = "news_articles";
    protected $primaryKey = 'identifier';

}

