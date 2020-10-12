<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

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
  include 'conexao.php';

  $sql = "SELECT nivel_usuario FROM usuarios WHERE email_usuario = '$user' and status='Ativo'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  $nivel = $array['nivel_usuario'];

  $array = mysqli_fetch_array($buscar);

?>
    <div class="container" style="margin-top: 40px">
    <div style="text-align: right">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);
            
            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $nroProduto = $array['nroProduto'];
                $nomeProduto = $array['nomeProduto'];
                $catProduto = $array['catProduto'];
                $qtdProduto = $array['qtdProduto'];
                $fornProduto = $array['fornProduto'];
        ?>
            <tr>
                <td><?php echo $nroProduto ?></td>
                <td><?php echo $nomeProduto ?></td>
                <td><?php echo $catProduto ?></td>
                <td><?php echo $qtdProduto ?></td>
                <td><?php echo $fornProduto ?></td>
                <td>
                <?php 
                  if (($nivel == 1)||($nivel == 2)) {
                ?>
                  <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                <?php } ?>

                <?php 
                  if ($nivel == 1){
                ?>
                  <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                  <?php } ?>
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