<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Filme;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index(Filme $filme)
    {
        $filmes = $filme->all();

        return view('filme/index', compact('filmes'));
    }

    public function show(string| int $id)
    {
        $filme = Filme::find($id);

        return view('filme/show', compact('filme'));
    }


    public function create()
    {
        return view('filme/insert');
    }

    public function store(Request $request, Filme $filme)
    {
        $data = $request->all();
        
        $filme = $filme->create($data);

        return redirect('filme');
    }

    public function edit(Filme $filme, string|int $id)
    {
        $filme = $filme->where('id', $id)->first();

        return view('filme.edit', compact('filme'));
    }

    public function update(Request $request, filme $filme, string $id)
    {
        $filme = $filme->find($id);

        $filme->update($request->only([
            'nome', 'link','id_categoria'
        ]));

        return redirect()->route('filme.index');
    }

    public function destroy(string| int $id)
    {
        $filme = filme::find($id);
        
        $filme->delete();

        return redirect()->route('filme.index');
    }
}