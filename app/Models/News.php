<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class News extends Model
{

    use HasFactory;

    protected $fillable = [
        'title', 
        'author',
        'introduction', 
        'url', 
        'image',
        'alt', 
        'topics', 
        'theme', 
        'published_at',
    ];
    
    protected $table = "news";

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
            "economie" => $this->group('Economi')
        ];
    }

    private function group(string $name, ?string $link = null, int $limit = 4, ?array $between = null): array
    {
        $category = $this->call($name, $limit, $between);
    
        if (!$link) {
            $link = "/news/search/" . strtolower($name);
        }

        return [
            $link,
            $category
        ];
    }

    private function call(?string $like = null, int $limit = 4, ?array $between = null): Collection
    {
        $conditions = [
            ['theme', '=', 'Technologique']
        ];

        if ($like) {
            $conditions[] = ['topics', 'like', "%$like%"];
        }

        // @phpstan-ignore-next-line
        $news = News::where($conditions)->orderBy("published_at", "DESC");

        if (is_array($between)) {
            $news = $news->whereBetween('id', $between);
        }
        
        return $news->limit($limit)->get();
    }

    public function scopeSpoilers(Builder $query): Collection
    {
        return $query->whereBetween("id", [160,165])->get();
    }

    public function scopeUrl(Builder $query, string $news): ?object
    {
        return $query->where('url', 'like', "%$news%")->first();
    }

    public function scopeKeyword(Builder $query, string $keyword): Collection
    {
        return $query->where('theme', '=', 'Technologique')
                     ->where('title', 'like', '%'.$keyword.'%')
                     ->orWhere('topics', 'like', '%' . $keyword . '%')
                     ->orderBy("published_at", "DESC")
                     ->get();
    }


}
