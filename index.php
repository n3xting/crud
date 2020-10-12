<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <style type="text/css">
        #tamanho {
            width: 350px;
            -webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
        }
    </style>
</head>
<body>
    
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
    <div style="padding: 10px">
    <center><img src="imagem/cadeado.png" style="width:125px; height: 125px"></center>
        <form action="index1.php" method="post">
            <div class="form-group">
                <label for="">E-mail</label>
                <input type="text" name="user" class="form-control" placeholder="seu@email.com" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="password" class="form-control" placeholder="********" autocomplete="off" required>
            </div>
        
        <div style="text-align: right">
            <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
        </form>
    </div>
    </div>

    <div style="margin-top: 10px">
        <center>
            <small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
        </center>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>