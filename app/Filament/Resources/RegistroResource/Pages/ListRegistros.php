<?php

namespace App\Filament\Resources\RegistroResource\Pages;

use App\Filament\Resources\RegistroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListRegistros extends ListRecords
{
    protected static string $resource = RegistroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
//     public function getTabs(): array
// {
//     return [
//         'Todos' => Tab::make(),
//         'Hoy' => Tab::make()
//             ->modifyQueryUsing(function (Builder $query) {
//                 $fechaHoy = now()->subDay();
//                 $formattedFechaHoy = $fechaHoy->format('Y-m-d'); // Aquí defines el formato que desees

//                 return $query->where('fecha', '≥', $formattedFechaHoy);
//             }),
//             'Esta Semana' => Tab::make()
//             ->modifyQueryUsing(function (Builder $query) {
//                 $startOfWeek = now()->subWeek()->startOfWeek()->toDateString();
//                 $endOfWeek = now()->subWeek()->endOfWeek()->toDateString();

//                 return $query->whereBetween('fecha', [$startOfWeek, $endOfWeek]);
//             }),
//             'Mes Anterior' => Tab::make()
//             ->modifyQueryUsing(function (Builder $query) {
//                 $startOfLastMonth = now()->subMonth()->startOfMonth()->toDateString();
//                 $endOfLastMonth = now()->subMonth()->endOfMonth()->toDateString();

//                 return $query->whereBetween('fecha', [$startOfLastMonth, $endOfLastMonth]);
//             }),
//     ];
// }
}
