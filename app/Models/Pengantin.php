<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengantin extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_pengantin',
        'uuid_user',
        'nama_pria',
        'nama_wanita',
        'nama_ayah_pria',
        'nama_ayah_wanita',
        'nama_ibu_pria',
        'nama_ibu_wanita',
        'story_pria',
        'story_wanita',
        'slug'
    ];

}
