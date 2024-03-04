<?php 
include("config.php");

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

        $sql = "INSERT INTO produtos (nome, preco, descricao) VALUES ('{$nome}', '{$preco}', '{$descricao}')";

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Produto cadastrado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível cadastrar o produto');</script>";
            echo "<script>location.href='?page=novo';</script>";
        }
        break;

    case 'editar':
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

        $sql = "UPDATE produtos SET nome='{$nome}', preco='{$preco}', descricao='{$descricao}' WHERE id={$id}";

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Produto editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível editar o produto');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        $id = $_REQUEST["id"];
        $sql = "DELETE FROM produtos WHERE id={$id}";

        $res = $conn->query($sql);
        if ($res == true) {
            echo "<script>alert('Produto excluído com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível excluir o produto');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>
