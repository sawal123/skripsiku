<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengantin;
use App\Models\Info;
use App\Models\Story;
use App\Models\Rekening;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendUndanganController extends Controller
{
    //
    public function undangan($nama,  $alamat)
    {
        $url = url('add-tamu/' . $nama . '/' . $alamat);
        $qrcode = QrCode::size(100)->generate($url);
        $data = Pengantin::where('uuid_pengantin', Auth::user()->uuid)->first();
        $info = Info::where('uuid_info', Auth::user()->uuid)->first();
        $story = Story::where('uuid_story', Auth::user()->uuid)->first();
        $rek = Rekening::where('uuid_rek', Auth::user()->uuid)->first();
        return view('undanganku', ['qrcode' => $qrcode, 'nama'=>$nama, 'alamat'=>$alamat, 'data'=>$data, 'info'=>$info, 'story'=>$story, 'rek'=>$rek]);
    }

}
