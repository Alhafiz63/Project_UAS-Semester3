<?php

namespace App\Filament\Resources\PersonalProgrammerResource\Pages;

use App\Filament\Resources\PersonalProgrammerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalProgrammer extends EditRecord
{
    protected static string $resource = PersonalProgrammerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
