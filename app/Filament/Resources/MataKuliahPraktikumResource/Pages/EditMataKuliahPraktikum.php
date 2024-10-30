<?php

namespace App\Filament\Resources\MataKuliahPraktikumResource\Pages;

use App\Filament\Resources\MataKuliahPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMataKuliahPraktikum extends EditRecord
{
    protected static string $resource = MataKuliahPraktikumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
