<?php

namespace App\Filament\Resources\MultaResource\Pages;

use App\Filament\Resources\MultaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMultas extends ListRecords
{
    protected static string $resource = MultaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
