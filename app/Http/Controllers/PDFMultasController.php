<?php

namespace App\Http\Controllers;
use App\Models\Carro;
use App\Models\Multa;
use App\Models\Ruta;
use PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PDFMultasController extends Controller
{
    //
    public function descargarpdfmultas(){
        $multas=Multa::all();
        $unidades=Carro::all();
        $rutas=Ruta::all();
        $data=[
            'date'=>date('d/m/y'),
            'multas'=>$multas,
            'unidades'=>$unidades,
            'rutas'=>$rutas

        ];
        $pdf = FacadePdf::loadView('multasPDF', $data);

        return $pdf->download('Reporte_Multas.pdf');
    }
}
