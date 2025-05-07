<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index2()
    {
        $categorias = Categoria::all(); 
        return view('productos.index2',compact('categorias'));
    }
}
