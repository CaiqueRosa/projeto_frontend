<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="cadastrar_produto.php" method="POST" >
        <label>Nome produto</label>
        <input type="text" name="nomeproduto"><br>

        <label>Preço</label>
        <input type="text" name="preco"><br>

        <label>Estoque</label>
        <input type="text" name="estoque"><br>

        <label>Código:</label>
        <input type="number" name="codigo"><br>

        <button type="submit" name="enviar" >Enviar</button>
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>