<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Story;
use RealRashid\SweetAlert\Facades\Alert;

class StoryController extends Controller
{
    //
    public function store_story(Request $request)
    {
        $story = Story::create([
            'uuid_story'=>Auth::user()->uuid,
            'kenal'=>$request->kenal,
            'dekat'=>$request->dekat,
            'pacaran'=>$request->pacaran,
            'menikah'=>$request->menikah
        ]);

        return redirect()->route('datapengantin')->with('toast_success','Data Pengantin Berhasil Disimpan');

    }
}
