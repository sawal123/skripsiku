<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\Pengantin;
use App\Models\Info;
use App\Models\Story;
use App\Models\Rekening;
use App\Models\Foto;
use App\Http\Controllers\Controller;
use App\Models\DaftarUndangan;
use App\Models\Tamu;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SendUndanganController extends Controller
{
    //
    public function undangan($slug,  $nama)
    {
        $url = url('add-tamu/' . $slug . '/' . $nama);
        $qrcode = QrCode::size(100)->generate($url);

        
        $data = Pengantin::where('slug', $slug)->first();
        $tamu = DaftarUndangan::where('uuid_user', $data->uuid_user)->where('nama_tamu', $nama)->first();
// dd($data);
        $info = Info::where('uuid_user',$data->uuid_user)->first();
        $story = Story::where('uuid_user',$data->uuid_user)->first();
        $rek = Rekening::where('uuid_user',$data->uuid_user)->first();
        $foto = Foto::where('uuid_user',$data->uuid_user)->first();

        // dd($foto);
        return view('undanganku', ['qrcode' => $qrcode, 'nama'=>$nama,'alamat'=>$tamu->alamat_tamu, 'data'=>$data, 'info'=>$info, 'story'=>$story, 'rek'=>$rek, 'foto'=>$foto]);
    }

}
