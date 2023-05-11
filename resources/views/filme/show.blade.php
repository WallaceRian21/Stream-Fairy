<h1>Detalhes da dúvida {{ $filme->id }}</h1>

<ul>
    <li>Nome: {{ $filme->nome }}</li>
    <li>Nome: {{ $filme->link }}</li>
</ul>

<form action="{{ route('filme.destroy', $filme->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
