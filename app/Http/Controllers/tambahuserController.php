<?php

namespace App\Http\Controllers;
use App\datauser;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class tambahuserController extends Controller
{
    public function index()
    {
        return view('admin.tambahuser');
    }
    public function tambahuser(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'role' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
        datauser::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' =>  Hash::make($request['password'])
        ]);
        return view('/admin.homeadmin');
    }
}
