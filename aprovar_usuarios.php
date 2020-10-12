<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <script src="https://kit.fontawesome.com/6f69e05f51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

<?php 

  session_start();

  $user = $_SESSION['user'];

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
  }

?>
    <div class="container" style="margin-top: 40px;">
    <div style="text-align: right">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

        <h3>Lista de Usuários</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Usuários</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo' order by nome_usuario ASC";
            $busca = mysqli_query($conexao, $sql);
            
            while ($array = mysqli_fetch_array($busca)) {

                $id_usuarios = $array['id_usuarios'];
                $nome_usuario = $array['nome_usuario'];
                $email_usuario = $array['email_usuario'];
                $nivel_usuario = $array['nivel_usuario'];
        ?>
            <tr>               
                <td><?php echo $nome_usuario ?></td>
                <td><?php echo $email_usuario ?></td>
                <td><?php echo $nivel_usuario?></td>

                <td>
                    <a class="btn btn-success btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuarios ?>&nivel_usuario=1" role="button"><i class="far fa-check-square"></i></i>&nbsp;Administrador</a>
                    <a class="btn btn-warning btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuarios ?>&nivel_usuario=2" role="button"><i class="far fa-check-square"></i></i>&nbsp;Funcionário</a>
                    <a class="btn btn-dark btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuarios ?>&nivel_usuario=3" role="button"><i class="far fa-check-square"></i></i>&nbsp;Conferente</a>
                    <a class="btn btn-danger btn-sm" style="color: #fff;" href="_deletar_usuario.php?id=<?php echo $id_usuarios ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
            </tr>   
        <?php } ?>
        </table>

    </div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>