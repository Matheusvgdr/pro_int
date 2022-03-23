<?php

require_once("conexao.php");

$query = $conecta->prepare("SELECT * FROM tb_cadastro WHERE nome = :NOME AND senha = :SENHA");

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$query->execute(array(

    ':NOME' => $nome,
    ':SENHA' => $senha

));

$users = $query->fetchAll(PDO::FETCH_ASSOC);

if(count($users) <= 0){

    header("location:../sweetalert/erro_login.php");

}else{

    $userValid = $users[0];

    session_start();

    $_SESSION['nome'] = $userValid['nome'];
    $_SESSION['senha'] = $userValid['senha'];

    $_SESSION["login"] = true;

    header('Location: redireciona.php');

}






?>