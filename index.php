<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background-color: lightblue;
      }
      input[type=text] {
  width: 50%;
  padding: 12px 20px;
      }
      input[type=password] {
  width: 50%;
  padding: 12px 20px;
      }
      input[type=submit] {
  width: 20%;
  padding: 12px 20px;
      }
      input[type=button] {
  width: 20%;
  padding: 12px 20px;
      }
    </style>
</head>
<body>


    <h1> formulario </h1>
    <form action="envio.php" method="post">
    Email: <input type="text" name="email"><br>
    Senha: <input type="password" name="senha"><br> <br>
    <input type="submit" value="Entrar"> 
    </form>

    
</body>
</html>