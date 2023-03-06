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

    protected function getTableQuery(): Builder
    {
        return News::query()->limit(3);
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
        ];
    }
}
