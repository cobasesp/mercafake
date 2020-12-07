<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'categoria',
        'tipo',
        'imagen'
    ];

    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id');
    }

    public function tipo()
    {
        return $this->hasOne('App\Tipo', 'id');
    }

}