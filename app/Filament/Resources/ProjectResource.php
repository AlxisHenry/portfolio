<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationIcon = 'heroicon-o-code';

    protected static ?string $navigationGroup = 'Models';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('github')
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('languages')
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('published_at')
                    ->required(),
                Forms\Components\Card::make([
                    Forms\Components\MarkdownEditor::make('description')
                        ->required(),
                ]),
                Forms\Components\Toggle::make('is_active')
                    ->label('Active'),
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
                Tables\Columns\TextColumn::make('description')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('link')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('github')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('image')
                    ->limit(20)
                    ->sortable(),
                Tables\Columns\TextColumn::make('languages')
                    ->limit(20)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
                    ->dateTime(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->sortable()
                    ->dateTime()
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                // Filters on some language

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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            "title", "description", "languages"
        ];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            // @phpstan-ignore-next-line
            "title" => $record->title,
            // @phpstan-ignore-next-line
            "description" => substr($record->description, 0, 30) . '...'
        ];
    }

    public static function getGlobalSearchResultUrl(Model $record): ?string
    {
        return ProjectResource::getUrl('edit', ['record' => $record]);
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
