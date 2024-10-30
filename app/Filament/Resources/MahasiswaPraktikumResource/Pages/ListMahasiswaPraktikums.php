<?php

namespace App\Filament\Resources\MahasiswaPraktikumResource\Pages;

use App\Filament\Resources\MahasiswaPraktikumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMahasiswaPraktikums extends ListRecords
{
    protected static string $resource = MahasiswaPraktikumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
