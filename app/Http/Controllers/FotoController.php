<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FotoController extends Controller
{
    //
    public function store_foto(Request $request)
    {

        $validatedData = $request->validate([
            'fotopria' => 'required',
            'fotowanita' => 'required',
            'fotocerita1' => 'required',
            'fotocerita2' => 'required',
            'fotocerita3' => 'required',
            'fotocerita4' => 'required'
        ]);

        $validatedData['uuid_foto'] = Str::uuid();
        $validatedData['uuid_user'] = Auth::user()->uuid;
        $validatedData['fotopria'] = $request->file('fotopria')->store('foto-pengantin');
        $validatedData['fotowanita'] = $request->file('fotowanita')->store('foto-pengantin');
        $validatedData['fotocerita1'] = $request->file('fotocerita1')->store('foto-pengantin');
        $validatedData['fotocerita2'] = $request->file('fotocerita2')->store('foto-pengantin');
        $validatedData['fotocerita3'] = $request->file('fotocerita3')->store('foto-pengantin');
        $validatedData['fotocerita4'] = $request->file('fotocerita4')->store('foto-pengantin');
        Foto::create($validatedData);

        return redirect()->route('datapengantin')->with('toast_success','Data Foto Berhasil Disimpan');

    }
}
