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
            "veille technologique" => $this->call('Veille Technologique'),
            "cybersécurité" => $this->call('Cyber', between: [150, 200]),
            "google" => $this->call('Google'),
            "facebook" => $this->call('Facebook'),
            "technologie" => $this->call('Techno', between: [160, 200]),
            "pegasus" => $this->call('Pegasus'),
            "internet" => $this->call('Internet'),
            "cybersécurité" => $this->call('Cyber'),
            "economie" => $this->call('Economi')
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
