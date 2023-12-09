<?php
if($_POST){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    echo "o nome é :".$nome." e o E-mail é:".$email. "e a senha é:" .$senha;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <form action="add_usuarios.php" method="POST">
         Nome: <input type = "text" name="nome" placeholder="Digite o Seu Nome:" required>
         E-mail: <input type = "email" name="email" placeholder="Digite o seu E-mail:" required>
         Senha: <input type = "password" name="senha" placeholder="Digite a sua Senha:" required>
        <input type="submit" value="Enviar">
    </form>
   
</body>
</html>