<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;

class jadwalController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function pengajuankegiatan(Request $request){
        {
            $this->validate($request, [
               
                'kak' => 'required|file|image|mimes:jpeg,png,jpg',
                'namakegiatan' => 'required',
                'ketuapelaksana'=>'required',
                'waktu'=>'required',
                'lokasi'=>'required',
                'nomertelp'=>'required',
               
            ]);
     
            $file = $request->file('kak');
     
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('assets/images/fotokak/',$nama_file);
            $user_id = Auth::user()->id;
     
            jadwal::create([
                'users_id'=> $user_id,
                'kak' => $nama_file,
                'nama_kegiatan' => $request->namakegiatan,
                'ketua' => $request->ketuapelaksana,
                'tanggal' => $request->waktu,
                'tempat' => $request->lokasi,
                'nomer' => $request->nomertelp,
            ]);
     
            return redirect()->back();
            }
    }
}
