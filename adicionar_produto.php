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
    <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
        <div class="form-group">
            <label>Nro Produto</label>
            <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Categoria</label>
                <select class="form-control" name="catProduto" autocomplete="off" required>

                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM catProduto order by nome_catProduto ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($buscar)) {
                        $id_catProduto = $array['id_catProduto'];
                        $nome_catProduto = $array['nome_catProduto'];
                ?>
                    <option><?php echo $nome_catProduto ?></option>
                <?php } ?>
                </select>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" name="qtdProduto" placeholder="Insira a quantidade do produto" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Fornecedor</label>
                <select class="form-control" name="fornProduto" autocomplete="off" required>
                <?php
                    include 'conexao.php';
                    $sql2 = "SELECT * FROM fornProduto order by nome_fornProduto ASC";
                    $buscar2 = mysqli_query($conexao, $sql2);

                    while ($array2 = mysqli_fetch_array($buscar2)) {
                        $id_fornProduto = $array2['id_fornProduto'];
                        $nome_fornProduto = $array2['nome_fornProduto'];
                ?>
                    <option><?php echo $nome_fornProduto ?></option>
                <?php } ?>
                </select>
        </div>
        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" id="botao" class="btn btn-sm" >Cadastrar</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>