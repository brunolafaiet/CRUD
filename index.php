<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- Banner -->
<div class="banner">
    <h1><strong>Focus Control</strong></h1>
    <p><h3>Controle de Estoque</h3></p>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo"> Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Lista de Produtos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
            include 'config.php';
    
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("novo-produto.php");
                    break;
                case "listar":
                    include("listar-produto.php");
                    break;
                case "salvar":
                    include("salvar-produto.php");
                    break;
                case "editar":
                    include("editar-produto.php");
                    break;
                default:
                    print "<h1> Soluções em Gereciamento</h1>";
            } 
            ?>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
