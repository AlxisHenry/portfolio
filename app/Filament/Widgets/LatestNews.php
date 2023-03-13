<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestNews extends BaseWidget
{
    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        // @phpstan-ignore-next-line
        return News::query()->orderByDesc("id")->limit(5);
    }

    protected function isTablePaginationEnabled(): bool 
    {
        return false;
    } 

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('title')
                ->limit(20),
            Tables\Columns\TextColumn::make('author'),
            Tables\Columns\TextColumn::make('introduction')
                ->limit(20),
            Tables\Columns\TextColumn::make('topics')
                ->limit(20),
            Tables\Columns\TextColumn::make('theme'),
            Tables\Columns\TextColumn::make('published_at')
                ->dateTime()
        ];
    }
}
