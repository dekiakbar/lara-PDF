<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ttd;

class ttdCont extends Controller
{

    public function index(Request $request)
    {
        $ttds = Ttd::paginate(10);
        return view('superadmin.ttd.Ittd',compact('ttds'))->with('no',($request->input('page',1)-1)*10);
    }

    public function create()
    {
        return view('superadmin.ttd.Tttd');
    }

    public function store(Request $request)
    {
        $simpan = Ttd::create([
            'nama' => $request->input('nama'),
            'nip' => $request->input('nip'),
            'jabatan' => $request->input('jabatan'),
        ]);
        session()->flash('status','success');
        session()->flash('pesan','Data Tanda Tangan Berhasil Disimpan');

        return redirect()->route('ttd.index');
    }

    public function update(Request $request, $id)
    {
        $edit = Ttd::findOrFail(decrypt($id));
        $edit->nama = $request->input('nama');
        $edit->nip = $request->input('nip');
        $edit->jabatan = $request->input('jabatan');

        if ($edit->save()) {
            session()->flash('status','success');
            session()->flash('pesan','Data Tanda Tangan Berhasil Diubah');
        }else{
            session()->flash('status','success');
            session()->flash('pesan','Data Tanda Tangan Gagal Diubah');
        }

        return redirect()->route('ttd.index');
    }

    public function destroy($id)
    {
        $hapus = Ttd::findOrFail(decrypt($id));
        $hapus->delete();

        session()->flash('status','success');
        session()->flash('pesan','Data Tanda Tangan Berhasil Dihapus');

        return redirect()->route('ttd.index');
    }
}
