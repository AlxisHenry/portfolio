<?php

namespace App\Filament\Resources\TravelResource\Pages;

use App\Filament\Resources\TravelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTravel extends EditRecord
{
    protected static string $resource = TravelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
