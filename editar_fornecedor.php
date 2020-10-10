<?php 

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
            margin-top: 40px;
        }
        
        #botao {
            background-color: #FF1168;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="container" id="tamanhoContainer">
        <h4>Cadastro</h4>
    <form action="_atualizar_fornecedor.php" method="post" style="margin-top: 20px">
    <?php 
    
    $sql = "SELECT * FROM `fornProduto` WHERE id_fornProduto = $id";
    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)) {
        
        $id_fornProduto = $array['id_fornProduto'];
        $nome_fornProduto = $array['nome_fornProduto']; 
        $contato_fornProduto = $array['contato_fornProduto'];
        $email_fornProduto = $array['email_fornProduto'];  
    
    ?>
        <div class="form-group">
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome_fornProduto" value="<?php echo $nome_fornProduto ?>" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Contato</label>
            <input type="text" class="form-control" name="contato_fornProduto" value="<?php echo $contato_fornProduto ?>" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email_fornProduto" value="<?php echo $email_fornProduto ?>" autocomplete="off">
        </div>
        
        <div style="text-align: right;">
            <a href="listar_fornecedor.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm" >Atualizar</button>
        </div>
    <?php } ?>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>