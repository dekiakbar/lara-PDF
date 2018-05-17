<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisKerja;
class jenisKerjaController extends Controller
{

    public function index(Request $request)
    {
        $kerjas = JenisKerja::paginate(10);
        return view('admin.pekerjaan.Ipekerjaan',compact('kerjas'))->with('no',($request->input('page',1)-1)*10);
    }


    public function create()
    {
        return view('admin.pekerjaan.Tpekerjaan');
    }


    public function store(Request $request)
    {
        $kerja = JenisKerja::create([
            'kode_prog' => $request->input('kode_prog'),
            'program' => $request->input('program'),
            'kode_keg' => $request->input('kode_keg'),
            'kegiatan' => $request->input('kegiatan'),
            'kode_output' => $request->input('kode_output'),
            'output' => $request->input('output'),
            'kode_komponen' => $request->input('kode_komponen'),
            'komponen' => $request->input('komponen'),
            'sub_komp' => $request->input('sub_komp'),
            'kode_akun' => $request->input('kode_akun'),
            'akun' => $request->input('akun'),
            'volume' => $request->input('volume'),
            'detail' => $request->input('detail'),
            'seksi' => $request->input('seksi'),
            'index' => $request->input('index'),
            'bulan' => $request->input('bulan'),
            'tahun' => $request->input('tahun'),
            'keterangan' => $request->input('keterangan'),
        ]);

        session()->flash('status','success');
        session()->flash('pesan','Data Pekerjaan Berhasil disimpan');

        return redirect('superadmin/pekerjaan');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
