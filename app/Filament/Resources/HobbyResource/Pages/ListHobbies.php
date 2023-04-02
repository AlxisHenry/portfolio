<?php

namespace App\Filament\Resources\HobbyResource\Pages;

use App\Filament\Resources\HobbyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHobbies extends ListRecords
{
    protected static string $resource = HobbyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
