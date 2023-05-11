<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Categoria $categoria)
    {
        $categorias = $categoria->all();

        return view('categoria/index', compact('categorias'));
    }

    public function show(string| int $id)
    {
        $categoria = Categoria::find($id);

        return view('categoria/show', compact('categoria'));
    }

    public function create()
    {
        return view('categoria/insert');
    }

    public function store(Request $request, Categoria $categoria)
    {
        $data = $request->all();
        
        $categoria = $categoria->create($data);

        return redirect('categoria');
    }

    public function edit(Categoria $categoria, string|int $id)
    {
        $categoria = $categoria->where('id', $id)->first();

        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria, string $id)
    {
        $categoria = $categoria->find($id);

        $categoria->update($request->only([
            'nome'
        ]));

        return redirect()->route('categoria.index');
    }

    public function destroy(string| int $id)
    {
        $categoria = Categoria::find($id);
        
        $categoria->delete();

        return redirect()->route('categoria.index');
    }
}