<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaController extends Controller
{
    public function index(){
        if(Auth::user()->role === 'Admin'){
            $user = User::where('role', 'Penyewa')->get();
            // dd($user);
            return view('Admin.Penyewa',['user'=>$user]);
        }else{
            return abort('403');
        }
    }

    public function delete($uid){
        $user = User::where('uuid',$uid)->first();
        $user->delete();
        return redirect()->back()->with('success','Data Berhasil diHapus!');
    }
}
