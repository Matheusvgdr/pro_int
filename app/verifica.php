<?php

function logIn(){

    if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){

        return false;
    }

    return true;
}

?>