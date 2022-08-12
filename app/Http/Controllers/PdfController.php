<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    private $user;
    private $users;


    public function generatePdf(){
//        $pdf = App ::make('dompdf.wrapper');
//        $pdf->loadHTML('<h1>Test</h1>');

        $name = "Shykot";
        $age = "23";

        $pdf = pdf::loadView('pdf', ['name' => $name, 'age' => $age]);
        return $pdf->download('uyiuyi'.time().rand('999', '9999999').'pdf');




    }
}
