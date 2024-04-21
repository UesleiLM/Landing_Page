<?php
session_start();

    require_once("db.class.php");
    $con = new Database();
    $link = $con -> getConexao();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    }

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $link->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt -> execute();

    $resultado = $stmt -> fetch(PDO::FETCH_ASSOC);

    if($resultado){
        if(password_verify($senha, $resultado['senha'])){
            $_SESSION["email"] = $resultado['email'];
            $_SESSION["loggedin"] = true;

            header("Location: ../telaLogado.php");
            exit;
        }else{
            echo "<script>
            function showAlert() {
              alert('senha incorreta!');
              setTimeout(function() {
                window.location.href = ' ../login.html';
              }, 1000); // 1000 milissegundos = 1 segundo
            }
            showAlert();
          </script>";
        }
    }else{
        echo "<script>
            function showAlert() {
              alert('Usuário não encontrado!');
              setTimeout(function() {
                window.location.href = ' ../login.html';
              }, 1000); // 1000 milissegundos = 1 segundo
            }
            showAlert();
          </script>";
    }

?>

