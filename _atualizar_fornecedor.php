<?php 

include 'conexao.php';

$id = $_POST['id'];

$nome_fornProduto = $_POST['nome_fornProduto'];
$contato_fornProduto = $_POST['contato_fornProduto'];
$email_fornProduto = $_POST['email_fornProduto'];


$sql = "UPDATE `fornproduto` 
        SET `nome_fornProduto`='$nome_fornProduto',`contato_fornProduto`='$contato_fornProduto',`email_fornProduto`='$email_fornProduto' 
        WHERE id_fornProduto = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso!</h3>
        <div style="margin-top: 10px">
        <a href="listar_fornecedor.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
        </div>
    </center>
</div>