<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'author', 'introduction', 'UrlArticle', 'LinkImage', 'AltImage', 'Theme', 'ThemePrincipal', 'FullDate', 'UpdateDate', 'UploadDate'];
    protected $table = "news";
    protected $primaryKey = 'identifier';

    public function scopeSpoilers($query) {

        return $query->whereBetween('news.identifier', [160,165])->get();

    }

    public function scopeTechnology($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->get();

    }

    public function scopeJuridique($query) {

        return $query->where('ThemePrincipal', '=', 'Juridique')->get();

    }

    public function scopeUrl($query, $ARTICLE_URL_NAME) {

        return $query->where('UrlArticle', 'like', "%$ARTICLE_URL_NAME%")->get();

    }

    public function scopeKeyword($query, $KEYWORD) {

        return $query->where('Theme', 'like', '%' . $KEYWORD . '%')->get();

    }

}
