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

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Techno%')->whereBetween('news.identifier',[160,200])->limit(4)->get();

    }

    public function scopeEconomy($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Economi%')->limit(4)->get();

    }

    public function scopeSociety($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Société%')->limit(4)->get();

    }

    public function scopePegasus($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Pegasus%')->limit(4)->get();

    }

    public function scopeCloud($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Cloud%')->limit(4)->get();

    }

    public function scopeAlgo($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Algo%')->limit(4)->get();

    }

    public function scopeInternet($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Internet%')->whereBetween('news.identifier',[200,250])->limit(4)->get();

    }

    public function scopeCyber($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('Theme', 'like', '%Cyber%')->whereBetween('news.identifier',[150, 200])->limit(4)->get();

    }

    public function scopeAllTechnology($query) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->get();

    }

    public function scopeUrl($query, $ARTICLE_URL_NAME) {

        return $query->where('UrlArticle', 'like', "%$ARTICLE_URL_NAME%")->get();

    }


    public function scopeKeyword($query, $KEYWORD) {

        return $query->where('ThemePrincipal', '=', ' Technologique ')->where('title', 'like', '%'.$KEYWORD.'%')->orWhere('Theme', 'like', '%' . $KEYWORD . '%')->where('ThemePrincipal', '=', ' Technologique ')->get();

    }

}
