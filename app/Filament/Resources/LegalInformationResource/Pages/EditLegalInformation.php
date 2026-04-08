<?php

namespace App\Filament\Resources\LegalInformationResource\Pages;

use App\Filament\Resources\LegalInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegalInformation extends EditRecord
{
    protected static string $resource = LegalInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
