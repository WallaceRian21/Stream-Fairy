<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Categoria $categoria)
    {
        $categorias = $categoria->all();

        return view('categoria/index', compact('categorias'));
    }
}