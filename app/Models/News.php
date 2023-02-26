<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'author', 'introduction', 'UrlArticle', 'LinkImage', 'AltImage', 'Theme', 'ThemePrincipal', 'FullDate', 'updated_at', 'published_at'];
    
    protected $table = "news";
    
    protected $primaryKey = 'identifier';    

    public $timestamps = false;

    public function scopeCategories(): array
    {
        return [
            "veille technologique" => $this->group('Veille Technologique'),
            "cybersécurité" => $this->group('Cyber', null, 4, [150, 200]),
            "google" => $this->group('Google'),
            "facebook" => $this->group('Facebook'),
            "technologie" => $this->group('Techno', null, 4, [160, 200]),
            "pegasus" => $this->group('Pegasus'),
            "internet" => $this->group( 'Internet'),
            "cybersécurité" => $this->group('Cyber'),
            "economie" => $this->group('Economi')
        ];
    }

    private function group(string $name, ?string $link = null, int $limit = 4, ?array $between = null): array
    {
        $category = $this->call($name, $limit, $between);
    
        if (!$link) {
            $link = "/news/word/" . strtolower($name);
        }

        return [
            $link,
            $category
        ];
    }

    private function call(?string $like = null, int $limit = 4, ?array $between = null)
    {
        $conditions = [
            ['ThemePrincipal', '=', 'Technologique']
        ];

        if ($like) {
            $conditions[] = ['Theme', 'like', "%$like%"];
        }

        $news = News::where($conditions)->orderBy("published_at", "DESC");

        if (is_array($between)) {
            $news = $news->whereBetween('news.identifier', $between);
        }
        
        return $news->limit($limit)->get();
    }

    public function scopeSpoilers($query) {
        return $query->whereBetween('news.identifier', [160,165])->get();
    }

    public function scopeUrl($query, $news) {
        return $query->where('UrlArticle', 'like', "%$news%")->get();
    }

    public function scopeById($query, $id) {
        return $query->where('identifier', '=', $id);
    }

    public function scopeKeyword($query, $keyword) {
        return $query->where('ThemePrincipal', '=', 'Technologique')
                     ->where('title', 'like', '%'.$keyword.'%')
                     ->orWhere('Theme', 'like', '%' . $keyword . '%')
                     ->orderBy("published_at", "DESC")
                     ->get();
    }

}
