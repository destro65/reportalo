<?php

namespace App\Filament\Admin\Resources\MultaResource\Pages;

use App\Filament\Admin\Resources\MultaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMulta extends EditRecord
{
    protected static string $resource = MultaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
