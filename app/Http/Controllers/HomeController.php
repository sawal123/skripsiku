<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tamu;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaltamu = Tamu::where('uuid_user', Auth::user()->uuid)->get()->count();
        return view('home', compact('totaltamu'));
    }

    public function qr(Request $request)
    {
        dd($request->all());
    }

    

    public function addTamu($nama, $alamat){
        $tamu = Tamu::create([
            'uuid_user'=>Auth::user()->uuid,
            'nama'=>$nama,
            'alamat'=>$alamat
        ]);
        
        return redirect()->back()->with('success', 'Tamu Telah Tersimpan');
    }
}
