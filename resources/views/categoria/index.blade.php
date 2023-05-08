@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card-body">
        <table style="color:chartreuse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($categorias as $categoria)
                        <th>{{ $categoria->id }}</th>
                        <th>{{ $categoria->nome }}</th>
                        <th>{{ $categoria->nome }}</th>
                        <th>{{ $categoria->created_at }}</th>
                        <th>{{ $categoria->updated_at }}</th>
                        <!-- <th><a href="/users/edit/{{ $categoria->id }}">Edit</a></th> -->
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection