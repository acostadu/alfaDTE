<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CotizacionEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Equipo de Ventas';
        $objDemo->receiver = 'Danny Acosta';
 
        Mail::to("acostadu@gmail.com")->send(new CotizacionEmail($objDemo));
    }
}
