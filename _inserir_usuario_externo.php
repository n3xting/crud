<?php 

include 'conexao.php';
include 'script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
// $nivel_usuario = $_POST['nivel_usuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, status)
        VALUES ('$nome_usuario', '$email_usuario', sha1('$senha_usuario'), '$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" style="width: 500px margin-top:20px">
    
    <center>
    <h4>Usuário adicionado com sucesso, esperando aprovação!</h4>
    </center>
    
    <div style= "padding-top: 20px">
        <center>
        <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Usuário</a>
        </center>
    </div>
</div>