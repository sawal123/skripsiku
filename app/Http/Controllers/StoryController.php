<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class StoryController extends Controller
{
    //
    public function store_story(Request $request)
    {
        $story = Story::create([
            'uuid_story'=>Str::uuid(),
            'uuid_user'=>Auth::user()->uuid,
            'kenal'=>$request->kenal,
            'dekat'=>$request->dekat,
            'pacaran'=>$request->pacaran,
            'menikah'=>$request->menikah
        ]);

        return redirect()->route('datapengantin')->with('toast_success','Data Pengantin Berhasil Disimpan');

    }

    
}
