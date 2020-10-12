<?php 

include 'conexao.php';
include 'script/password.php';

$user = $_POST['user'];
$passwordusuario = $_POST['password'];

$sql = "SELECT email_usuario, senha_usuario FROM usuarios WHERE email_usuario = '$user' and status='Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);


while ($array = mysqli_fetch_array($buscar)) {
    $password = $array['senha_usuario'];

    $passwordDecodificada = sha1($passwordusuario);
    
    if ($total > 0) {
    if ($passwordDecodificada == $password) {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: menu.php');
    }else{
        header('Location: erro.php');
    }
}else {
    header('Location: erro.php');
}

}
?>