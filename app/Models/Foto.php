<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_foto',
        'fotopria',
        'fotowanita',
        'fotocerita1',
        'fotocerita2',
        'fotocerita3',
        'fotocerita4'

    ];
}
