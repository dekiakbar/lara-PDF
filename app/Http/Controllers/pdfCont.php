<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class pdfCont extends Controller
{
    public function render()
    {
    	$pdf = PDF::loadView('surat');
		return $pdf->stream('Surat-Tugas.pdf');
    }
}
