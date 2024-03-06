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


<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Adicione novos Itens</h1>
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
                    <button type="submit" class="btn btn-primary">cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
