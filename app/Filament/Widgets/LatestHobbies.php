<?php

namespace App\Filament\Widgets;

use App\Models\Hobby;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestHobbies extends BaseWidget
{
    protected static ?int $sort = 5;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        // @phpstan-ignore-next-line
        return Hobby::query()->orderByDesc("id")->limit(5);
    }

    protected function isTablePaginationEnabled(): bool 
    {
        return false;
    } 

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('name')
                ->limit(20),
            Tables\Columns\TextColumn::make('image')
                ->limit(12),
            Tables\Columns\TextColumn::make('description')
                ->limit(50),
            Tables\Columns\TextColumn::make('position'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
        ];
    }
}
