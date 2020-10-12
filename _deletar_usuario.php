<?php 

include 'conexao.php';

$id = $_GET['id'];

$deletar = "DELETE FROM usuarios WHERE id_usuarios = $id";
$sql = mysqli_query($conexao, $deletar);

header("Location: aprovar_usuarios.php"); // redireciona novamente para a página de aprovação

?>
