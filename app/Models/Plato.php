<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Plato extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'categoria', 'url', 'idLocal'];
    protected $table = 'plato';

    public function scopeCategoria($query,$categoria)
    {
        if($categoria)
        {
            return $query->where('categoria','like',"%$categoria%");
        }
    }
}
