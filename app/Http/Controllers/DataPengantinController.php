<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pengantin;
use App\Models\Info;
use App\Models\Story;
use App\Models\Rekening;
use RealRashid\SweetAlert\Facades\Alert;


class DataPengantinController extends Controller
{
    //

    public function lihatdata()
    {
        $data = Pengantin::all();
        $data = Pengantin::where('uuid_pengantin', Auth::user()->uuid)->get();
        $info = Info::all();
        $info = Info::where('uuid_info', Auth::user()->uuid)->get();
        $story = Story::all();
        $story = Story::where('uuid_story', Auth::user()->uuid)->get();
        $rek = Rekening::all();
        $rek = Rekening::where('uuid_rek', Auth::user()->uuid)->get();
        return view('lihatdata',compact('data','info','story','rek'));
    }

    public function index()
    {    
        $data = Pengantin::all();
        $data = Pengantin::where('uuid_pengantin', Auth::user()->uuid)->get();
        $info = Info::all();
        $info = Info::where('uuid_info', Auth::user()->uuid)->get();
        $story = Story::all();
        $story = Story::where('uuid_story', Auth::user()->uuid)->get();
        $rek = Rekening::all();
        $rek = Rekening::where('uuid_rek', Auth::user()->uuid)->get();
        return view('datapengantin',compact('data','info','story','rek'));
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
            'story_pria'=>$request->story_pria,
            'story_wanita'=>$request->story_wanita
        ]);

        return redirect()->back()->with('toast_success','Data Pengantin Berhasil Disimpan');

    }
    
    

}
