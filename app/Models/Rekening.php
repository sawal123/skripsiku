<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_rek',
        'uuid_user',
        'namabank',
        'norek',
        'nama',
        'namabank_b',
        'norek_b',
        'nama_b'
        
    ];
}
