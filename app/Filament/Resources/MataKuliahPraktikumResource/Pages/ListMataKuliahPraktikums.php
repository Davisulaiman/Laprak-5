<?php

namespace App\Filament\Resources\MataKuliahPraktikumResource\Pages;

use App\Filament\Resources\MataKuliahPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMataKuliahPraktikums extends ListRecords
{
    protected static string $resource = MataKuliahPraktikumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
