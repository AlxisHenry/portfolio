<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HobbyResource\Pages;
use App\Filament\Resources\HobbyResource\RelationManagers;
use App\Models\Hobby;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HobbyResource extends Resource
{
    protected static ?string $model = Hobby::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Models';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\TextInput::make('position'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('image')
                    ->limit(12),
                Tables\Columns\TextColumn::make('description')
                    ->limit(60)
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->sortable(),
            ])
            ->defaultSort('position', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHobbies::route('/'),
            'create' => Pages\CreateHobby::route('/create'),
            'edit' => Pages\EditHobby::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            "name"
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'id' => $record->id,
            'name' => $record->name,
            'position' => $record->position,
        ];
    }
    
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    
    protected static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() < 1 ? 'danger' : 'success';
    }
}
