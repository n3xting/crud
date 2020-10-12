<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>

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


<div class="container" style="margin-top: 50px">
<div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-sm btn-danger">Sair</a>
</div>
<div class="row">
<?php 

  if (($nivel == 1)||($nivel == 2)) {

?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

<?php 

  if (($nivel == 1)||($nivel == 2)) {

?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categorias</h5>
        <p class="card-text">Opção para adicionar categorias de produtos em nosso estoque.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categorias</a>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Categorias</h5>
        <p class="card-text">Visualizar, editar e excluir as categorias.</p>
        <a href="listar_categoria.php" class="btn btn-primary">Categorias</a>
      </div>
    </div>
  </div>

<?php 

  if (($nivel == 1)||($nivel == 2)) {

?>
  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Fornecedor</h5>
        <p class="card-text">Opção para adicionar fornecedores de produtos em nosso estoque.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Fornecedores</h5>
        <p class="card-text">Visualizar, editar e excluir os fornecedores.</p>
        <a href="listar_fornecedor.php" class="btn btn-primary">Fornecedores</a>
      </div>
    </div>
  </div>

<?php 

  if ($nivel == 1) {

?>
  <div class="col-sm-6" style="margin-top: 20px; margin-bottom: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Cadastrar Usuários</h5>
        <p class="card-text">Opção para o cadastro de usuários.</p>
        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top: 20px; margin-bottom: 20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuarios.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>