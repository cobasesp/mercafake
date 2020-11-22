<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller{

    public function index(Request $request){
        return Producto::all();
    }

    public function show($id){
        return Producto::findOrFail($id);
    }
}