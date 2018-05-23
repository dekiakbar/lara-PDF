<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ttd;

class ttdCont extends Controller
{

    public function index()
    {
        //
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
        //
    }
}
