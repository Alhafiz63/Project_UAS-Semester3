<?php

namespace App\Filament\Resources\PersonalProgrammerResource\Pages;

use App\Filament\Resources\PersonalProgrammerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalProgrammers extends ListRecords
{
    protected static string $resource = PersonalProgrammerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
