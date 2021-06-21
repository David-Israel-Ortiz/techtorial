<?php
?>
<!DOCTYPE html>
<html lang="Pt-br"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>Techtorial</title> 
    </head>
<body>
<center>
<div class="titulo">
<!--<h1>Techtorial</h1>
    <h2>
-->
</div>
    <div class="tela-login">
<h3 class="title has-text-grey">LOGIN</h3>
<div class="box">
    <form action="login.php" method="POST">
        <div class="field">
            <div class="control">
                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuario" autofocus="">
                <br><br>                       
            </div>
        </div>
        <div class="field">
            <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
        </div>
    </form>
    <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
        <button type="submit" class="recuperar" >Esqueceu a senha?</button>
</center>
</div>
<footer>

</body>
</html>
    