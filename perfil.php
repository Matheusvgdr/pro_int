<?php
include("app/verifica.php");

session_start();

if (logIn()){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Bem vindo ao seu perfil</h1>

<a href="app/logout.php">Sair</a>

<?php

}else {
    header("Location:erro_page/erro_login.html");
}

?>
</body>
</html>