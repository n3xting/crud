<?php 

include 'conexao.php';

$nome_catProduto = $_POST['nome_catProduto'];

$sql = "INSERT INTO catProduto (nome_catProduto)
        VALUES ('$nome_catProduto')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 500px margin-top:20px">
    
    <center>
    <h4>Categoria adicionada com sucesso!</h4>
    </center>
    
    <div style= "padding-top: 20px">
        <center>
        <a href="adicionar_categoria.php" role="button" class="btn btn-sm btn-primary">Cadastrar nova Categoria</a>
        </center>
    </div>
</div>