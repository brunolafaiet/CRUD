<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Editar Estoque</h1>
            <?php 
            $sql = "SELECT * FROM produtos WHERE id=". $_REQUEST["id"];
            $res = $conn->query($sql);
            $row = $res->fetch_object();
            ?>
            <form action="?page=salvar" method="POST" class="edit-form">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" value="<?php echo $row->nome; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Preço</label>
                    <input type="text" name="preco" value="<?php echo $row->preco; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Descrição</label>
                    <textarea name="descricao" class="form-control"><?php echo $row->descricao; ?></textarea>
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
