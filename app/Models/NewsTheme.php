<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTheme extends Model
{
    use HasFactory;

    protected $fillable = ['Theme', 'ThemePrincipal'];

    protected $table = "news_themes";
    protected $primaryKey = 'identifier';

}
