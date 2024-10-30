<?php

namespace App\Filament\Resources\MahasiswaPraktikumResource\Pages;

use App\Filament\Resources\MahasiswaPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMahasiswaPraktikum extends EditRecord
{
    protected static string $resource = MahasiswaPraktikumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
