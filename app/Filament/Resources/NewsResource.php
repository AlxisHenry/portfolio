<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-rss';
    
    protected static ?string $navigationGroup = 'Models';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('topics')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('theme')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('published_at')
                    ->required(),
                Forms\Components\Textarea::make('introduction')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->sortable(),
                Tables\Columns\TextColumn::make('introduction')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('image')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('alt')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('topics')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('theme')
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }    

    public static function getGloballySearchableAttributes(): array
    {
        return [
            "id", "title"
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            "id" => "#{$record->id}",
            "title" => substr($record->name, 25) . "..."
        ];
    }
    
    public static function getGlobalSearchResultUrl(Model $record): ?string
    {
        return NewsResource::getUrl('edit', ['record' => $record]);
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
