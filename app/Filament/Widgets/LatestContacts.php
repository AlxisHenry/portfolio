<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestContacts extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getTableQuery(): Builder
    {
        return Contact::query()->limit(3);
    }

    protected function isTablePaginationEnabled(): bool 
    {
        return false;
    } 

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email'),
        ];
    }
}
