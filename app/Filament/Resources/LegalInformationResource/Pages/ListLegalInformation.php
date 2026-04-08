<?php

namespace App\Filament\Resources\LegalInformationResource\Pages;

use App\Filament\Resources\LegalInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegalInformation extends ListRecords
{
    protected static string $resource = LegalInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
