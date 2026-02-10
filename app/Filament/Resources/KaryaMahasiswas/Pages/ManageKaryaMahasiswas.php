<?php

namespace App\Filament\Resources\KaryaMahasiswas\Pages;

use App\Filament\Resources\KaryaMahasiswas\KaryaMahasiswaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageKaryaMahasiswas extends ManageRecords
{
    protected static string $resource = KaryaMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
