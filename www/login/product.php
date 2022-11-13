<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>


    Bem vindo tela de Produtos, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>

    <form action="cadastrar_produto.php" method="POST" >
        Nome Produto<input type="text" name="nomeproduto"><br>
        Preço <input type="text" name="preco"><br>
        Codigo <input type="number" name="codigo"><br>
        <button type="submit" name="enviar" >Enviar</button>

    </form>
</body>
</html>