<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

use App\User;
use App\JenisKerja;
use App\Pegawai;
use App\Tgl;

class pdfCont extends Controller
{
  //   public function pdf(Request $request)
  //   {
  //   	$p = Pegawai::with('users')->where('user_id',$request->input('pID'))->first();
  //   	$k = JenisKerja::findOrFail($request->input('kID'));
  //       $w = Tgl::findOrFail($request->input('wID'));

  //   	$pdf = PDF::loadView('surat',compact('p','k'))->setPaper('a4', 'potrait');
		// return $pdf->stream('Surat-Tugas.pdf');
  //   }

    public function tampilSurat(Request $request)
    {
    	$kerjas = JenisKerja::paginate(10);
        return view('user.pekerjaan.Ipekerjaan',compact('kerjas'))->with('no',($request->input('page',1)-1)*10);
    }

    public function Ttanggal(Request $request)
    {
        $pID = $request->input('pID');
        $kID = $request->input('kID');
        return view('user.tgl.Ttgl',compact('pID','kID'));
    }

    public function isiTanggal(Request $request)
    {
        $simpan = Tgl::create([
            'waktupelaksanaan' => $request->input('waktupelaksanaan'),
            'tanggalberangkat' => $request->input('tanggalberangkat'),
            'tanggalkembali' => $request->input('tanggalkembali'),
            'tempatberangkat' => $request->input('tempatberangkat'),
            'tempattujuan' => $request->input('tempattujuan'),
        ]);
        $wID = $simpan->id;

        $p = Pegawai::with('users')->where('user_id',$request->input('pID'))->first();
        $k = JenisKerja::findOrFail($request->input('kID'));
        $w = Tgl::findOrFail($wID);

        $pdf = PDF::loadView('surat',compact('p','k','w'))->setPaper('a4', 'potrait');
        return $pdf->stream('Surat-Tugas.pdf');
    }
}
