<?php

namespace App\Filament\Widgets;

use App\Models\Experience;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestExperiences extends BaseWidget
{
    protected static ?int $sort = 6;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        // @phpstan-ignore-next-line
        return Experience::query()->orderByDesc("id")->limit(5);
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
            Tables\Columns\TextColumn::make('company'),
            Tables\Columns\TextColumn::make('city'),
            Tables\Columns\TextColumn::make('started_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('ended_at')
                ->dateTime()
        ];
    }
}
