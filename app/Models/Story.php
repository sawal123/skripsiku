<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable =[
        'uuid_story',
        'uuid_user',
        'kenal',
        'dekat',
        'pacaran',
        'menikah'
    ];
}
