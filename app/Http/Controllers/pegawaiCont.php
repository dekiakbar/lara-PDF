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
        $pegawais = Pegawai::join('users','user_id','users.id')
                ->select('*','pegawais.id as id')
                ->paginate(5);
        return view('admin.pegawai.Ipegawai',compact('pegawais'))->with('no',($req->input('page',1)-1)*5);
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
        }else{
            session()->flash('status','warning');
            session()->flash('pesan','Password dan Password konfirmasi tidak cocok');
        }

        return redirect('/superadmin/pegawai/create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
