<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Produto - Nome da Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"> <!-- Adicione o link para o seu arquivo de estilo CSS aqui -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo"> Estoque de Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Novo Produto</h1>
            <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Preço</label>
                    <input type="text" name="preco" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
