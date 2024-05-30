<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rekening;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RekeningController extends Controller
{
    //
    public function store_rek(Request $request)
    {
        $rek = Rekening::create([
            'uuid_rek'=>Str::uuid(),
            'uuid_user'=>Auth::user()->uuid,
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
