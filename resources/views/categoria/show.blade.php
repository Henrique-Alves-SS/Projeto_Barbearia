<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da categoria</title>
</head>
<body>
    <section>
        <h1>Detalhes da categoria</h1>
        <p><strong>Código:</strong> {{ $categoria->id }}</p>
        <p><strong>Nome:</strong> {{ $categoria->nome }}</p>
        <p><strong>Descrição:</strong> {{ $categoria->descricao ?? 'Sem descrição' }}</p>
        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>
        <a href="{{ route('categorias.index') }}">Voltar</a>
    </section>
</body>
</html>