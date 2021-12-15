<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\listuser;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth:: User()-> role == 'Admin'){
            return view('admin.homeadmin');
        }
        else{
            
            return view('homepage');
        }
    }
    public function listuserindex()
    {
        $listuser = listuser::all()->where('role','User');
        return view('admin.listuser',['listuser' => $listuser]);
    }

    public function hapususer($id)
    {
        $listuser = listuser::find($id);
        $listuser->delete();
        return redirect()->back();
    }

    public function update($id, Request $request)
{
    $this->validate($request,[
	   'nama' => 'required',
	   'email' => 'required',
    ]);
 
    $pegawai = Pegawai::find($id);
    $pegawai->nama = $request->nama;
    $pegawai->alamat = $request->email;
    $pegawai->save();
    return redirect('/pegawai');
}
}
