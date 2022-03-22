<?php

require_once("verifica.php");

session_start();

if(logIn()){

   header('Location: ../perfil.php');

}else{

    header('Location: ../index.php');
}

?>