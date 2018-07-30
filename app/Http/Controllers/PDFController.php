<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {

    	$rand = rand();

        $data = [
        	'title' => 'Factura de Venta', 
        	'date' => date('Y-m-d'),
        	'nu_invoice' => $rand 
        ];

        //Guardar en el Public de Laravel
        $pdf = PDF::loadView('myPDF', $data);
        //->save(storage_path('app\public\').$rand.'.pdf');

        //return "Archivo Descargado";

        //Descargar en Browser
        return $pdf->download($rand.'.pdf');

    }
}
