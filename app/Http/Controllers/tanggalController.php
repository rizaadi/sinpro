<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tanggalController extends Controller
{
    public function index()
    {
        return view('tanggal');
    }
}
