<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestProjects extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Project::query()->latest()->limit(5);
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
            Tables\Columns\TextColumn::make('link')
                ->limit(20),
            Tables\Columns\TextColumn::make('github')
                ->limit(20),
            Tables\Columns\TextColumn::make('languages')
                ->limit(20),
            Tables\Columns\TextColumn::make('published_at')
                ->dateTime()
        ];
    }
}
