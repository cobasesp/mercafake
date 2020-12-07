<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller{

    public function index(Request $request){
        return Producto::with(['categoria', 'tipo'])->get();
    }

    //Mostrar un producto por id
    public function show($nombre){
        $nombre_clean = str_replace('-', ' ', $nombre);

        return Producto::with(['categoria', 'tipo'])
                        ->get()
                        ->where('nombre', $nombre_clean);
    }

    //Productos por categoría
    public function porCategoria($nombre){
        $categoria = \App\Categoria::where('nombre', $nombre)->first();

        if($categoria !== null){
            return Producto::with(['categoria', 'tipo'])
                            ->get()
                            ->where('categoria', $categoria->id);
        
        }else{
            return $this->jsonResponse(["error" => true, "msg" => "La categoría no existe"], 404);
        }
    }
}