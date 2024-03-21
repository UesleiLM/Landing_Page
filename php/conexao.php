<?php
    $servidor = "monorail.proxy.rlwy.net";
    $usuario = "root";
    $senha = "HcucOwikScRrtPFjJAeyqDfBXHJQOLFc";
    $dbname = "primeevents";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);
    if(!$conexao){
        die("Houve um erro: " . mysqli_connect_error());
    }
?>