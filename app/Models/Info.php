<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_info',
        'uuid_user',
        'akad',
        'resepsi',
        'tempat',
        'pukul_akad',
        'pukul_resepsi'
    ];
}
