<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php">Sair</a> <br> <br>




<?php
// guardando o email na variavel $email
$email = $_POST["email"];
$_SESSION["email"] = $email;

if(empty($_SESSION["email"])){ // verifica se o email foi salvo na sessão ou n
   echo "email não foi salvo!";
}else{
  echo "Bem vindo, " . $_SESSION["email"] . ".<br>";
}

?>


    
</body>
</html>