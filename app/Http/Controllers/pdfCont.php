<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\User;
use App\JenisKerja;
use App\Pegawai;

class pdfCont extends Controller
{
    public function render(Request $request)
    {
    	$pdf = PDF::loadView('surat');
		return $pdf->stream('Surat-Tugas.pdf');
    }

    public function pdf(Request $request)
    {
    	$p = Pegawai::findOrFail();
    	$kerja = JenisKerja::findOrFail();

    	$pdf = PDF::loadView('surat');
		return $pdf->stream('Surat-Tugas.pdf');
    }

    public function tampilSurat(Request $request)
    {
    	$kerjas = JenisKerja::paginate(10);
        return view('user.pekerjaan.Ipekerjaan',compact('kerjas'))->with('no',($request->input('page',1)-1)*10);
    }
}
