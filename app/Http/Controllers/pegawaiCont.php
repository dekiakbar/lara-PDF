<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Role;
use App\User;

class pegawaiCont extends Controller
{
    public function index(Request $req)
    {
        $pegawais = Pegawai::with('users.roles')->paginate(5);
        $roles = Role::all();
        return view('admin.pegawai.Ipegawai',compact('pegawais','roles'))->with('no',($req->input('page',1)-1)*5);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.pegawai.Tpegawai',compact('roles'));
    }

    public function store(Request $request)
    {
        if ($request->password == $request->password_confirmation) {
            $user = User::create([
              'name'     => $request->name,
              'email'    => $request->email,
              'password' => bcrypt($request->password),
            ]);
            $user->roles()->attach(Role::where('id', $request->role)->first());

            $pegawai = Pegawai::create([
                'user_id' => $user->id,
                'nip' => $request->nip,
                'pangkat' => $request->pangkat,
                'golongan' => $request->golongan,
                'jabatan' => $request->jabatan,
                'wilayah' => $request->wilayah,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'angkutan' => $request->angkutan,
            ]);

            session()->flash('status','success');
            session()->flash('pesan','Data Pegawai Berhasil disimpan');
        }else{
            session()->flash('status','warning');
            session()->flash('pesan','Password dan Password konfirmasi tidak cocok');
        }

        return redirect()->route('pegawai.index');
    }

    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail(decrypt($id));
        $pegawai->nip = $request->nip;
        $pegawai->pangkat = $request->pangkat;
        $pegawai->golongan = $request->golongan;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->wilayah = $request->wilayah;
        $pegawai->tempat = $request->tempat;
        $pegawai->tanggal = $request->tanggal;
        $pegawai->angkutan = $request->angkutan;
        $pegawai->save();

        session()->flash('status','success');
        session()->flash('pesan','Data Pegawai Berhasil diubah');

        return redirect()->route('pegawai.index');
    }

    public function destroy($id)
    {
        $hapus = Pegawai::with('users')->findOrFail(decrypt($id));
        $hapus->users->roles()->detach();
        $hapus->users->delete();
        $hapus->delete();

        session()->flash('status','success');
        session()->flash('pesan','Data Pegawai Berhasil dihapus');
        return redirect()->route('pegawai.index');
    }
}
