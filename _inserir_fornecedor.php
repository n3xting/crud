<?php 

include 'conexao.php';

$nome_fornProduto = $_POST['nome_fornProduto'];
$nome_fornProduto = $_POST['nome_fornProduto'];
$contato_fornProduto = $_POST['contato_fornProduto'];
$email_fornProduto= $_POST['email_fornProduto'];

$sql = "INSERT INTO `fornproduto`(`nome_fornProduto`, `contato_fornProduto`, `email_fornProduto`) 
        VALUES ('$nome_fornProduto','$contato_fornProduto','$email_fornProduto')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 500px margin-top:20px">
    
    <center>
    <h4>Fornecedor adicionado com sucesso!</h4>
    </center>
    
    <div style= "padding-top: 20px">
        <center>
        <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Fornecedor</a>
        </center>
    </div>
</div>