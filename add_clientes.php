<?php
include ("conexao.php");
if($_POST){
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $sql = "insert into clientes (nome, email) values ('$nome', '$email')";
    $stmt = $conexao->prepare($sql); 
    $stmt->execute();
    //echo "foi enviado o nome".$nome." e o email".$email;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="add_clientes.php" method="POST">
         nome <input type = "text" name="nome" placeholder="Qual é o seu nome?" required>
         E-mail <input type = "email" name="email" placeholder="Qual é o seu E-mail" required>
        <input type="submit" value="Salvar">
    </form>
   
</body>
</html>
