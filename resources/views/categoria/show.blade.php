<h1>Detalhes da dúvida {{ $categoria->id }}</h1>

<ul>
    <li>Nome: {{ $categoria->nome }}</li>
</ul>

<form action="{{ route('categoria.destroy', $categoria->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
