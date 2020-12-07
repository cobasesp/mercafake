<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller{

    public function index(Request $request){
        return Categoria::all();
    }

    public function show($id){
        return Categoria::findOrFail($id);
    }

}