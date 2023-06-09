@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card-body">
        <button class="btn"><th><a style="color:chartreuse" href="/categoria/create">Novo</a></th></button>
        <table style="color:chartreuse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Criado</th>
                    <th>Modificado</th>
                    <th>Ver</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>

                    @foreach($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td>{{ $categoria->created_at->format("d-m-Y H:i:s") }}</td>
                    <td>{{ $categoria->updated_at->format("d-m-Y H:i:s") }}</td> 
                    <td>
                        <a class="p-2" href="{{ route('categoria.show', $categoria->id) }}">Ir</a>
                    </td>
                    <td>
                        <a class="p-1" href="{{ route('categoria.edit', $categoria->id) }}">Ver</a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection