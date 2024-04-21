<?php
    require_once("db.class.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $con = new Database();
        $link = $con -> getConexao();

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmaSenha = $_POST['confirmaSenha'];

        $sqlVerificaEmail = "SELECT COUNT(*) as count FROM usuarios WHERE email = :email";
        $stmtVerificaEmail = $link->prepare($sqlVerificaEmail);
        $stmtVerificaEmail->bindParam(':email', $email);
        $stmtVerificaEmail->execute();
        $resultadoVerificaEmail = $stmtVerificaEmail->fetch(PDO::FETCH_ASSOC);
        
        if($resultadoVerificaEmail['count'] > 0){
            echo "<script>
            function showAlert() {
              alert('Usuário já existente.');
              setTimeout(function() {
                window.location.href = ' ../signup.html'; // Redirecionar para a página inicial após 1 segundo
              }, 1000); // 1000 milissegundos = 1 segundo
            }
            showAlert();
          </script>";
        }else if($confirmaSenha != $senha){
            echo "<script>
            function showAlert() {
              alert('As senhas não coincidem.');
              setTimeout(function() {
                window.location.href = ' ../signup.html'; // Redirecionar para a página inicial após 1 segundo
              }, 1000); // 1000 milissegundos = 1 segundo
            }
            showAlert();
          </script>";
        }else{
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (email, senha)
                    VALUES (:email, :senha)";

            try{
                $stmt = $link->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha_hash);
                $stmt->execute(); 
                
                echo "<script>
            function showAlert() {
              alert('Usuário cadastrado com sucesso.');
              setTimeout(function() {
                window.location.href = ' ../login.html'; 
              }, 1000); // 1000 milissegundos = 1 segundo
            }
            showAlert();
          </script>";
            }catch(PDOException $e){
                echo "Erro: " . $e -> getMessage();
            }
        }
        
    }
?>


