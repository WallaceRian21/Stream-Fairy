@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card-body">
        <button class="btn"><th><a style="color:chartreuse" href="/filme/create">Novo</a></th></button>
        <table style="color:chartreuse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Categoria</th>
                    <th>Nome</th>
                    <th>Link</th>
                    <th>Criado</th>
                    <th>Modificado</th>
                    <th>Ver</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($filmes as $filme)
                <tr>
                    <td>{{ $filme->id }}</td>
                    <td>{{ $filme->id_categoria }}</td>
                    <td>{{ $filme->nome }}</td>
                    <td>{{ $filme->link }}</td>
                    <td>{{ $filme->created_at->format("d-m-Y H:i:s") }}</td>
                    <td>{{ $filme->updated_at->format("d-m-Y H:i:s") }}</td> 
                    <td>
                        <a class="p-2" href="{{ route('filme.show', $filme->id) }}">Ir</a>
                    </td>
                    <td>
                        <a class="p-1" href="{{ route('filme.edit', $filme->id) }}">Editar</a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection