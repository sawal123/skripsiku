<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarUndangan extends Model
{
    use HasFactory;
    protected $fillable =['uuid_dtamu','nama_tamu','alamat_tamu','notelp_tamu'];
}
