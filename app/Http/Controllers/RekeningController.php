<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Rekening;
use RealRashid\SweetAlert\Facades\Alert;

class RekeningController extends Controller
{
    //
    public function store_rek(Request $request)
    {
        $rek = Rekening::create([
            'uuid_rek'=>Auth::user()->uuid,
            'namabank'=>$request->namabank,
            'norek'=>$request->norek,
            'nama'=>$request->nama,
            'namabank_b'=>$request->namabank_b,
            'norek_b'=>$request->norek_b,
            'nama_b'=>$request->nama_b
        ]);

        return redirect()->route('datapengantin')->with('toast_success','Data Pengantin Berhasil Disimpan');

    }
}
