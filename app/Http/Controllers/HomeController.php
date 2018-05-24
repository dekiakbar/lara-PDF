<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->hasRole('Super Admin')) {
            return redirect('/superadmin/pegawai');
        }

        if ($request->user()->hasRole('Admin')) {
            return redirect('/admin/tgl');
        }

        if ($request->user()->hasRole('User')) {
            return redirect('/user/surat');
        }
        
        // $request->user()->authorizeRoles(['Super Admin','Admin','User']);
        // return view('home');
    }

}
