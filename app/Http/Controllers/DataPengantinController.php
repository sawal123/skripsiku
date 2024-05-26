<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pengantin;
use App\Models\Info;
use RealRashid\SweetAlert\Facades\Alert;


class DataPengantinController extends Controller
{
    //
    public function index()
    {
        return view('datapengantin');
    }

    public function store(Request $request)
    {
        $data = Pengantin::create([
            'uuid_pengantin'=>Auth::user()->uuid,
            'nama_pria'=>$request->nama_pria,
            'nama_wanita'=>$request->nama_wanita,
            'nama_ayah_pria'=>$request->nama_ayah_pria,
            'nama_ayah_wanita'=>$request->nama_ayah_wanita,
            'nama_ibu_pria'=>$request->nama_ibu_pria,
            'nama_ibu_wanita'=>$request->nama_ibu_wanita,
            'akad'=>$request->akad,
            'resepsi'=>$request->resepsi,
            'story_pria'=>$request->story_pria,
            'story_wanita'=>$request->story_wanita
        ]);

        return redirect()->back()->with('toast_success','Data Pengantin Berhasil Disimpan');

    }

    

}
