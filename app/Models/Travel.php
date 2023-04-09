<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    protected $fillable = [
        'title',
        'description',
        'slug',
        'content',
        'period',
        'is_active',
    ];

    protected $casts = [
        'period' => 'datetime',
    ];

    public function scopeActive(\Illuminate\Database\Eloquent\Builder $query): Collection
    {
        return $query->where('is_active', true)->get();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getFormattedPeriodAttribute(): string
    {
        // @phpstan-ignore-next-line
        return $this->period->format('F Y');
    }
}
