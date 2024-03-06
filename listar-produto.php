<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Produtos - Focus Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Adicione o link para o seu arquivo de estilo CSS aqui -->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <h1>Listar Itens</h1>
            <?php 
            $sql = "SELECT * FROM produtos";
            $res = $conn->query($sql);
            $qtd = $res->num_rows;
            if ($qtd > 0) {
                echo "<table class='table table-hover table-striped table-bordered'>";
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Nome</th>";
                echo "<th>Preço</th>";
                echo "<th>Descrição</th>";
                echo "<th>Ações</th>";
                echo "</tr>";
                while ($row = $res->fetch_object()) {
                    echo "<tr>";
                    echo "<td>".$row->id."</td>";
                    echo "<td>".$row->nome."</td>";
                    echo "<td>R$ ".$row->preco."</td>";
                    echo "<td>".$row->descricao."</td>";
                    echo "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{return false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
                    echo "</tr>";
                } 
                echo "</table>";
            } else {
                echo "<p class='alert alert-danger'>Não foram encontrados resultados.</p>";
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
