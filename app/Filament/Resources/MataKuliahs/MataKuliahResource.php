<?php

namespace App\Filament\Resources\MataKuliahs;

use App\Filament\Resources\MataKuliahs\Pages\ManageMataKuliahs;
use App\Models\MataKuliah;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MataKuliahResource extends Resource
{
    protected static ?string $model = MataKuliah::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode')
                    ->required(),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('sks')
                    ->required()
                    ->numeric(),
                TextInput::make('semester')
                    ->required()
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('category')
                    ->required()
                    ->default('Wajib'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('kode'),
                TextEntry::make('nama'),
                TextEntry::make('sks')
                    ->numeric(),
                TextEntry::make('semester')
                    ->numeric(),
                TextEntry::make('category'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama')
            ->columns([
                TextColumn::make('kode')
                    ->searchable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('sks')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('semester')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('category')
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
            'index' => ManageMataKuliahs::route('/'),
        ];
    }
}
