<?php

namespace App\Filament\Resources\PeriodeMagangs\Pages;

use App\Filament\Resources\PeriodeMagangs\PeriodeMagangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePeriodeMagangs extends ManageRecords
{
    protected static string $resource = PeriodeMagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
