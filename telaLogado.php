<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logado</title>
</head>
<body>
    <h1>Olá <?php echo $_SESSION['email']; ?>, seja bem-vindo!</h1>
</body>
</html>