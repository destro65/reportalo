<?php

namespace App\Filament\Widgets;

use App\Models\Multa;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class MultasChart extends ChartWidget
{
    protected static ?string $heading = 'Registro de Multas';
    //protected static ?int $sort = 5;


    protected function getData(): array
    {
        $data = Trend::model(Multa::class)
        ->between(
            
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Multas por Mes',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
    
public function getDescription(): ?string
{
    return 'El numero de multas generadas por Mes';
}
public function position(): array
    {
        return [2, 2]; // Ajusta las coordenadas según tus necesidades
    }
}
