<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengantin;
use App\Models\DaftarUndangan;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarUndanganController extends Controller
{
    //
    public function index()
    {
        $dtamu = DaftarUndangan::all();
        $dtamu = DaftarUndangan::where('uuid_dtamu', Auth::user()->uuid)->get();
        $pengantin = Pengantin::all();
        $pengantin = Pengantin::where('uuid_pengantin', Auth::user()->uuid)->first();
        return view('daftarundangan',compact('dtamu','pengantin'));
    }

    public function store_dtamu(Request $request)
    {
        $dtamu = DaftarUndangan::create([
            'uuid_dtamu'=>Auth::user()->uuid,
            'nama_tamu'=>$request->nama_tamu,
            'alamat_tamu'=>$request->alamat_tamu,
            'notelp_tamu'=>$request->notelp_tamu
        ]);

        return redirect()->route('daftarundangan')->with('toast_success','Tamu Undangan Berhasil Disimpan');

    }

    
}
