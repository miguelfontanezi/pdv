<?php
if($_POST){
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    echo "o nome do produto é".$nome." e o preço do produto é".$preco . "A quantidade é:" .$quantidade;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <form action="add_produtos.php" method="POST">
         Nome: <input type = "text" name="nome" placeholder="Qual é o Nome do Produto?" required>
         Preço: <input type = "text" name="preco" placeholder="Qual é o Preço do Produto?" required>
         Quantidade: <input type = "number" name="quantidade" placeholder="Qual é a Quantidade do Produto?" required>
        <input type="submit" value="Salvar">
    </form>
   
</body>
</html>
