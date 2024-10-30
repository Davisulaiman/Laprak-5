<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MataKuliahPraktikumResource\Pages;
use App\Models\MataKuliahPraktikum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, Toggle, Select, ImageUpload};
use Filament\Tables\Columns\{TextColumn, BooleanColumn, ImageColumn};
use Filament\Forms\Components\FileUpload;

class MataKuliahPraktikumResource extends Resource
{
    protected static ?string $model = MataKuliahPraktikum::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_mata_kuliah')->required(),
                Select::make('jenis_mata_kuliah')
                    ->options([
                        'Teori' => 'Teori',
                        'Praktikum' => 'Praktikum',
                    ])
                    ->required(),
                Toggle::make('is_active')->label('Aktif')->default(true),
                FileUpload::make('gambar')->label('Gambar')->image(), // Ganti ImageUpload dengan FileUpload
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_mata_kuliah')->label('Nama Mata Kuliah'),
                TextColumn::make('jenis_mata_kuliah')->label('Jenis Mata Kuliah'),
                BooleanColumn::make('is_active')->label('Aktif'),
                ImageColumn::make('gambar')->label('Gambar'),
            ])
            ->filters([
                // Tambahkan filter di sini jika diperlukan
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi di sini jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMataKuliahPraktikums::route('/'),
            'create' => Pages\CreateMataKuliahPraktikum::route('/create'),
            'edit' => Pages\EditMataKuliahPraktikum::route('/{record}/edit'),
        ];
    }
}
