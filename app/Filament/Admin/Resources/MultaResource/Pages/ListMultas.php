<?php

namespace App\Filament\Admin\Resources\MultaResource\Pages;

use App\Filament\Admin\Resources\MultaResource;
//use Filament\Actions;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMultas extends ListRecords
{
    protected static string $resource = MultaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ButtonAction::make('Generar Reporte')->url(fn()=>route('descargarpdfmultas'))
            ->openUrlInNewTab(),
            Actions\CreateAction::make(),
        ];
    }
}
