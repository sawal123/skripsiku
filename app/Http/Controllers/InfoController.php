<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Info;
use RealRashid\SweetAlert\Facades\Alert;

class InfoController extends Controller
{
    //

    public function store_info(Request $request)
    {
        $info = Info::create([
            'uuid_info'=>Auth::user()->uuid,
            'akad'=>$request->akad,
            'resepsi'=>$request->resepsi,
            'tempat'=>$request->tempat,
            'pukul_akad'=>$request->pukul_akad,
            'pukul_resepsi'=>$request->pukul_resepsi
        ]);

        return redirect()->route('datapengantin')->with('toast_success','Data Pengantin Berhasil Disimpan');

    }

    
}
