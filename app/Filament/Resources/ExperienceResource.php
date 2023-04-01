<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms;
use Illuminate\Database\Eloquent\Model;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationGroup = 'Models';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('started_at')
                    ->required(),
                Forms\Components\TextInput::make('ended_at'),
                Forms\Components\Card::make([
                    Forms\Components\MarkdownEditor::make('description')
                        ->required(),
                ]),
                Forms\Components\Toggle::make('is_current'),
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
                Tables\Columns\TextColumn::make('company')
                    ->limit(15)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('image')
                    ->limit(10)
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('city')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('started_at')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('ended_at')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_current')
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            "title", "company"
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'title' => $record->title,
            'company' => $record->company,
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
