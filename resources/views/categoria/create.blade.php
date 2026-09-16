<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova categoria</title>
</head>
<body>
    <section>
        <h1>Nova categoria</h1>
        <form action="{{ route('categorias.store') }}" method="POST">
            @include('categoria.form')
        </form>
    </section>
</body>
</html>