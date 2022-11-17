<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cadastro de Produto</title>
</head>
<body>

    <h1>Cadastrar novo Produto</h1>

    <form action="cadastro_produto.php" method="POST" >
        <div class="form-group">
            <label>Nome produto</label>
            <input type="text" name="nomeproduto"><br>
        </div>

        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="preco"><br>
        </div>

        <div class="form-group">
            <label>Estoque</label>
            <input type="text" name="estoque"><br>
        </div>

        <div class="form-group">
            <label>Código:</label>
            <input type="number" name="codigo"><br>
        </div>
        
        <button type="submit" name="enviar" class="btn btn-primary">Cadastrar</button>
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>