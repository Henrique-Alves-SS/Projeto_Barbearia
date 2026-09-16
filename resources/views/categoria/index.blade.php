<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <section>
        <h1>Categorias</h1>

        @if (session('sucesso'))
            <p role="status">
                {{ session('sucesso') }}
            </p>
        @endif

        <p><a href="{{ route('categorias.create') }}">Nova categoria</a></p>

        <table>
            <caption>Lista de categorias cadastradas</caption>
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td>{{ $categoria->descricao ?? 'Sem descrição' }}</td>
                        <td>
                            <a href="{{ route('categorias.show', $categoria) }}">Ver</a>
                            <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST"
                                onsubmit="return confirm('Deseja excluir esta categoria?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Nenhuma categoria cadastrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
</body>
</html>