<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "yoga";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);
    if(!$conexao){
        die("Houve um erro: " . mysqli_connect_error());
    }
?>