<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'id','titulo', 'descripcion', 'nuevo', 'imagen'
    ];
}
