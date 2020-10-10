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
    <form action="_atualizar_produto.php" method="post" style="margin-top: 20px">
    <?php 
    
    $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)) {
        
        $id_estoque = $array['id_estoque'];
        $nroProduto = $array['nroProduto'];
        $nomeProduto = $array['nomeProduto'];
        $catProduto = $array['catProduto'];
        $qtdProduto = $array['qtdProduto'];
        $fornProduto = $array['fornProduto'];   
    
    ?>
        <div class="form-group">
            <label>Nro Produto</label>
            <input type="number" class="form-control" name="nroProduto" value="<?php echo $nroProduto ?>" disabled>
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto ?>">
        </div>
        <div class="form-group">
            <label>Categoria</label>
                <select class="form-control" name="catProduto">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="qtdProduto" value="<?php echo $qtdProduto ?>">
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
                <select class="form-control" name="fornProduto">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
        </div>
        <div style="text-align: right;">
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