<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaPraktikumResource\Pages;
use App\Filament\Resources\MahasiswaPraktikumResource\RelationManagers;
use App\Models\MahasiswaPraktikum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Toggle, Select, FileUpload, ImageUpload};
use Filament\Tables\Columns\{TextColumn, BooleanColumn, ImageColumn};

class MahasiswaPraktikumResource extends Resource
{
    protected static ?string $model = MahasiswaPraktikum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('mata_kuliah_praktikum_id')
                    ->relationship('mataKuliahPraktikum', 'nama_mata_kuliah')
                    ->required(),
                TextInput::make('nama_mahasiswa')->required(),
                TextInput::make('nim')->required(),
                Select::make('semester')
                    ->options([
                        'Ganjil' => 'Ganjil',
                        'Genap' => 'Genap',
                    ])->required(),
                Toggle::make('status_lulus')->label('Lulus')->default(false),
                FileUpload::make('dokumen')
                ->label('Unggah Dokumen (PDF/Excel)')
                ->acceptedFileTypes([
                    'application/pdf',
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                ])
                ->directory('dokumen'), // Tentukan direktori penyimpanan jika diperlukan
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_mahasiswa'),
                TextColumn::make('nim'),
                TextColumn::make('semester'),
                BooleanColumn::make('status_lulus')->label('Lulus'),
                TextColumn::make('mataKuliahPraktikum.nama_mata_kuliah')->label('Mata Kuliah'),
                TextColumn::make('dokumen')->label('Dokumen')->url(fn($record) => asset('storage/' . $record->dokumen)),
            ])
            ->filters([
                // Filter tambahan jika diperlukan
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMahasiswaPraktikums::route('/'),
            'create' => Pages\CreateMahasiswaPraktikum::route('/create'),
            'edit' => Pages\EditMahasiswaPraktikum::route('/{record}/edit'),
        ];
    }
}
