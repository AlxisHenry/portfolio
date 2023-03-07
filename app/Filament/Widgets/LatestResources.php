<?php

namespace App\Filament\Widgets;

use App\Models\Resource;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestResources extends BaseWidget
{
    protected static ?int $sort = 3;
    
    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Resource::query()->latest()->limit(5);
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
            Tables\Columns\TextColumn::make('description')
                ->limit(20),
            Tables\Columns\TextColumn::make('author')
                ->limit(20),
            Tables\Columns\TextColumn::make('link')
                ->limit(20),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
        ];
    }
}
