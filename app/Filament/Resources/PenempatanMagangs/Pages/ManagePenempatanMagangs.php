<?php

namespace App\Filament\Resources\PenempatanMagangs\Pages;

use App\Filament\Resources\PenempatanMagangs\PenempatanMagangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePenempatanMagangs extends ManageRecords
{
    protected static string $resource = PenempatanMagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
