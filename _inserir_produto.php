<?php

    include 'conexao.php';

    $nroProduto = $_POST['nroProduto']; // Recebe o valor do produto
    $nomeProduto = $_POST['nomeProduto']; // Recebe o valor do produto
    $catProduto = $_POST['catProduto']; // Recebe o valor do produto
    $qtdProduto = $_POST['qtdProduto']; // Recebe o valor do produto
    $fornProduto = $_POST['fornProduto']; // Recebe o valor do produto

    $sql = "INSERT INTO `estoque`(`nroProduto`, `nomeProduto`, `catProduto`, `qtdProduto`, `fornProduto`) 
            VALUES ($nroProduto,'$nomeProduto','$catProduto',$qtdProduto,'$fornProduto')";

    $inserir = mysqli_query($conexao, $sql);
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 500px margin-top:20px">
    
    <center>
    <h4>Produto adicionado com sucesso!</h4>
    </center>
    
    <div style= "padding-top: 20px">
        <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
        </center>
    </div>
</div>