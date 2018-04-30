<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class superAdminCont extends Controller
{
    public function tampilTambahUser()
    {
    	$role = Role::all();
    	return view('admin.pegawai.Tpegawai',compact('role'));
    }
}
