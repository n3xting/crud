<?php 

include 'conexao.php';

$id = $_POST['id'];
// $nroProduto = $_POST['nroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$catProduto = $_POST['catProduto'];
$qtdProduto = $_POST['qtdProduto'];
$fornProduto= $_POST['fornProduto'];

$sql = "UPDATE `estoque` 
        SET `nomeProduto`='$nomeProduto',
            `catProduto`='$catProduto',
            `qtdProduto`='$qtdProduto',
            `fornProduto`='$fornProduto' 
        WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso!</h3>
        <div style="margin-top: 10px">
        <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
        </div>
    </center>
</div>