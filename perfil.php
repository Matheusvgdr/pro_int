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
    <title>Bem vindo ao seu perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>

<div class="container">

    <a href="app/logout.php"><button class="btns btns1">Sair</button></a>
    <div class="profile-box">
        <img src="img/menu.png" class="menu-icon">
        <img src="img/setting.png" class="setting-icon">
        <img src="img/rosa.png" class="profile-pic">
        <h3>Matheus Victor</h3>
        <p>Treinador iniciante</p>
        <div class="social-media">
            <img src="img/instagram.png" >
            <img src="img/telegram.png" alt="">
            <img src="img/dribble.png" alt="">
        </div>
        <button type="button">Follow</button>
        <div class="profile-bottom">
            <p>Ler mais sobre</p>
            <img src="img/arrow.png" alt="">
        </div>
    </div>
</div>

<?php

}else {
    header("Location:erro_page/erro_login.html");
}

?>
</body>
</html>