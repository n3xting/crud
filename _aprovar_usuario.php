<?php 

include 'conexao.php';

$id = $_GET['id'];
$nivel_usuario = $_GET['nivel_usuario'];

if ($nivel_usuario == 1){
    
    $sql = "UPDATE usuarios SET status='Ativo', nivel_usuario = 1 WHERE id_usuarios = $id";
    $atualizacao = mysqli_query($conexao, $sql);
}
if ($nivel_usuario == 2){
    
    $sql = "UPDATE usuarios SET status='Ativo', nivel_usuario = 2 WHERE id_usuarios = $id";
    $atualizacao = mysqli_query($conexao, $sql);
}
if ($nivel_usuario == 3){
    
    $sql = "UPDATE usuarios SET status='Ativo', nivel_usuario = 3 WHERE id_usuarios = $id";
    $atualizacao = mysqli_query($conexao, $sql);
}

header("Location: aprovar_usuarios.php"); // redireciona novamente para a página de aprovação

?>