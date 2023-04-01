<?php

namespace App\Filament\Resources\HobbyResource\Pages;

use App\Filament\Resources\HobbyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHobby extends EditRecord
{
    protected static string $resource = HobbyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
