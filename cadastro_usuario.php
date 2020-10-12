<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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

<?php 

  session_start();

  $user = $_SESSION['user'];

  if (!isset($_SESSION['user'])) {
    header('Location: index.php');
  }

?>

<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">
<div style="padding: 10px">
<h4>Cadastro de Usuário</h4>
    <form action="_inserir_usuario.php" method="post">
        <div class="form-group">
            <label for="">Nome do Usuário</label>
            <input type="text" name="nome_usuario" class="form-control" placeholder="Nome completo" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" name="email_usuario" class="form-control" placeholder="seu@email.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input id="txtSenha" type="password" name="senha_usuario" class="form-control" placeholder="*********" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="">Confirmar senha</label>
            <input type="password" name="confirmarSenha_usuario" class="form-control" placeholder="Confirmar senha" autocomplete="off" required oninput="validaSenha(this)">
            <small>Precisa ser idêntica a senha digitada acima.</small>
        </div>
        <div class="form-group">
            <label for="">Nível de acesso</label>
            <select name="nivel_usuario" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Funcionário</option>
                <option value="3">Conferente</option>
            </select>
        </div>

        <div style="text-align: right">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            <button class="btn btn-sm btn-success">Cadastrar</button>
        </div>
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script>
    function validaSenha (input){
        if (input.value != document.getElementById('txtSenha').value){
            input.setCustomValidity('Repita a senha corretamente.');
        } else {
            input.setCustomValidity('');
        }
    }
</script>
</body>
</html>