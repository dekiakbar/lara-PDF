<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class superAdminCont extends Controller
{

    public function index()
    {
        //
    }

    public function createPegawai()
    {
        $roles = Role::all();
        return view('admin.pegawai.Tpegawai',compact('roles'));
    }

    public function store(Request $request)
    {
        //
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
