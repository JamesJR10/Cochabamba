<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComenRest extends Model
{
    use HasFactory;
    protected $fillable = ['calificacion', 'comentario', 'idUser', 'idLocal'];
    protected $table = 'comenrest';
}
