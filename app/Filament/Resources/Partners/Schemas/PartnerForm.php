<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('website')
                    ->url()
                    ->maxLength(255),
                FileUpload::make('logo')
                    ->image()
                    ->required()
                    ->disk('uploads')
                    ->visibility('public')
                    ->directory('partners')
                    ->columnSpanFull(),
            ]);
    }
}
