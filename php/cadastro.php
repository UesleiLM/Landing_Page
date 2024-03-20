<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST['senha'];
    $confirmacao = $_POST['confirmaSenha'];

    $sql= "INSERT INTO usuario(email, senha, confirmaSenha) 
            VALUES('$email', '$senha', '$confirmacao')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso!";
    }else{
        echo "Erro";
    }
    mysqli_close($conexao);

?>