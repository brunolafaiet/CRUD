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
    <p><h3>Controle de Estoques</h3></p>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo"> Adicionar Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Itens do Estoque</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div id="conteudo" class="col-md-8 mt-5 fade-transition">
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
                    print "<h1>Soluções em Gerenciamento</h1>";
            }
            ?>
        </div>
        <div class="col-md-4">
            <!-- Divs adicionais para imagens e textos -->
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="image-container">
                        <img src="img/tipos-de-logistica-empresarial_0.png" alt="Imagem 1">
                        <p class="image-description">"Concentre-se no sucesso com a Focus Soluções: Transformando desafios em conquistas."</p>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="image-container">
                        <img src="img/que-es-la-logistica-empresarial.png" alt="Imagem 2">
                        <p class="image-description">"Gerencie com precisão, controle com confiança: A solução definitiva para o seu estoque, pela Focus Soluções."</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="image-container">
                        <img src="img/gestao-de-estoque.png" alt="Imagem 2">
                        <p class="image-description">"Potencialize sua eficiência, otimize seu estoque: Focus Soluções, sua parceira em gestão assertiva."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('nav a').on('click', function(e) {
            e.preventDefault();
            var nextPage = $(this).attr('href');
            $('#conteudo').addClass('hide'); // Adiciona a classe 'hide' para iniciar a animação de ocultar
            setTimeout(function() {
                $('#conteudo').load(nextPage + ' #conteudo > *', function() {
                    $('#conteudo').removeClass('hide'); // Remove a classe 'hide' após o conteúdo ser carregado
                    anime({
                        targets: '.image-container',
                        translateY: [50, 0],
                        opacity: [, 1],
                        delay: anime.stagger(100), // Atraso entre as animações
                        easing: 'easeOutQuad'
                    });
                });
            }, 500); // Ajuste esse tempo conforme a duração da sua animação
        });
    });
</script>

<footer>
    <div class="contato">
        <p>Telefone: +55 (11) 1234-5678</p>
        <p>Email: contato@focuscontrol.com.br</p>
        <p>Endereço: Rua das Soluções, 123 - Bairro da Eficiência, Cidade-Salvador, Estado - Bahia</p>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </div>
</footer>

</body>
</html>
