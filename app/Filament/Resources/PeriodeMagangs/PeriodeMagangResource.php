<?php

namespace App\Filament\Resources\PeriodeMagangs;

use App\Filament\Resources\PeriodeMagangs\Pages\ManagePeriodeMagangs;
use App\Models\PeriodeMagang;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

use BackedEnum;
use Filament\Support\Icons\Heroicon;

class PeriodeMagangResource extends Resource
{
    protected static ?string $model = PeriodeMagang::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Periode Magang';

    protected static ?string $pluralLabel = 'Periode Magang';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('student_name')
                    ->label('Nama Mahasiswa')
                    ->required(),
                TextInput::make('nim')
                    ->label('NIM')
                    ->required(),
                TextInput::make('internship_place')
                    ->label('Tempat Magang')
                    ->required(),
                TextInput::make('location')
                    ->label('Lokasi'),
                DatePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->required(),
                DatePicker::make('end_date')
                    ->label('Tanggal Selesai')
                    ->required(),
                Select::make('dosen_id')
                    ->label('Dosen Pembimbing')
                    ->relationship('dosen', 'name')
                    ->searchable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_name')
                    ->label('Nama Mahasiswa')
                    ->searchable(),
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable(),
                TextColumn::make('internship_place')
                    ->label('Tempat Magang')
                    ->searchable(),
                TextColumn::make('formatted_period')
                    ->label('Periode')
                    ->sortable(),
                TextColumn::make('dosen.name')
                    ->label('Dosen Pembimbing')
                    ->searchable(),
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
            'index' => ManagePeriodeMagangs::route('/'),
        ];
    }
}
