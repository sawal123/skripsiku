<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Tamu;

class DaftarHadirController extends Controller
{
    //
    public function index()
    {
        $data = tamu::all();
        $data = Tamu::where('uuid_user', Auth::user()->uuid)->get();
        return view('daftarhadir',compact('data'));
    }
}