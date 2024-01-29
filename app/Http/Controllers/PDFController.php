<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Multa;
use App\Models\User;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use PDF;
//use Illuminate\Support\Facades\File;

class PDFController extends Controller
{
    //
    public function descargarpdf(){
        
        $users=User::all();
        $data=[
            'date'=>date('d/m/y'),
            'users'=>$users
            
        ];
        
        $pdf = FacadePdf::loadView('userPDF', $data);

        return $pdf->download('Reporte_Usuarios.pdf');
    }
    

}
