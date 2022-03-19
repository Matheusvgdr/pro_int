<?php

require_once("conexao.php");

if($_POST["nome"] && $_POST["cidade"] && $_POST["idade"] && $_POST["pokemon1"] && $_POST["tipo1"] && $_POST["pokemon2"] && $_POST["tipo2"] && $_POST["pokemon3"] && $_POST["tipo3"]){

    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];
    $idade = $_POST["idade"];
    $pokemon1 = $_POST["pokemon1"];
    $pokemon2 = $_POST["pokemon2"];
    $pokemon3 = $_POST["pokemon3"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = $_POST["tipo2"];
    $tipo3 = $_POST["tipo3"];


$query = $conecta->prepare("INSERT INTO tb_cadastro(nome, cidade, idade, pokemon1, tipo1, pokemon2, tipo2, pokemon3, tipo3) VALUES (:NOME, :CIDADE, :IDADE, :POKEMON1, :TIPO1, :POKEMON2, :TIPO2, :POKEMON3, :TIPO3)");

$query->execute(array(

    ':NOME'=> $nome,
    ':CIDADE'=> $cidade,
    ':IDADE'=> $idade,
    ':POKEMON1'=> $pokemon1,
    ':TIPO1'=> $tipo1,
    ':POKEMON2'=> $pokemon2,
    ':TIPO2'=> $tipo2,
    ':POKEMON3'=> $pokemon3,
    ':TIPO3'=> $tipo3
));

echo "Por favor de certo";
}else{
    echo "não funfou";
}

?>