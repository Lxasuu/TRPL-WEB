<?php

namespace App\Filament\Resources\PenempatanMagangs;

use App\Filament\Resources\PenempatanMagangs\Pages\ManagePenempatanMagangs;
use App\Models\PenempatanMagang;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenempatanMagangResource extends Resource
{
    protected static ?string $model = PenempatanMagang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'company_name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('company_name')
                    ->required(),
                TextInput::make('location'),
                TextInput::make('academic_year'),
                TagsInput::make('student_list')
                    ->placeholder('Add student name and press enter'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('company_name'),
                TextEntry::make('location'),
                TextEntry::make('academic_year'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('company_name')
            ->columns([
                TextColumn::make('company_name')
                    ->searchable(),
                TextColumn::make('location')
                    ->searchable(),
                TextColumn::make('academic_year')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePenempatanMagangs::route('/'),
        ];
    }
}
