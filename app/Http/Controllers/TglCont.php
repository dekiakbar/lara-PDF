<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tgl;
class TglCont extends Controller
{

    public function index(Request $req)
    {
        $tgls = Tgl::paginate(10);
         return view('admin.tgl.Itgl',compact('tgls'))->with('no',($req->input('page',1)-1)*10);
    }

    public function create()
    {
        return view('admin.tgl.Ttgl');
    }

    public function store(Request $request)
    {
        $simpan = Tgl::create([
            'waktupelaksanaan' => $request->input('waktupelaksanaan'),
            'tanggalberangkat' => $request->input('tanggalberangkat'),
            'tanggalkembali' => $request->input('tanggalkembali'),
            'tempatberangkat' => $request->input('tempatberangkat'),
            'tempattujuan' => $request->input('tempattujuan'),
        ]);
        session()->flash('status','success');
        session()->flash('pesan','Data Pelaksanaan Tugas Berhasil disimpan');

        return redirect()->route('tgl.index');
    }

    public function update(Request $request, $id)
    {
        $ubah = Tgl::findOrFail(decrypt($id));
        $ubah->waktupelaksanaan = $request->input('waktupelaksanaan');
        $ubah->tanggalberangkat = $request->input('tanggalberangkat');
        $ubah->tanggalkembali = $request->input('tanggalkembali');
        $ubah->tempatberangkat = $request->input('tempatberangkat');
        $ubah->tempattujuan = $request->input('tempattujuan');
        $ubah->save();

        session()->flash('status','success');
        session()->flash('pesan','Data Pelaksanaan Tugas Berhasil Diubah');

        return redirect()->route('tgl.index');
    }

    public function destroy($id)
    {
        $hapus = Tgl::findOrFail(decrypt($id));
        $hapus->delete();

        session()->flash('status','success');
        session()->flash('pesan','Data Waktu Pelaksanaan Berhasil dihapus');
        return redirect()->route('tgl.index');
    }
}
