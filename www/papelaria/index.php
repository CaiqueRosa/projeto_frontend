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


    <h4>Boas vindas, <?php echo $_SESSION['nome']; ?> </h4>

    <div>
    <a href="logout.php">Sair</a>

    <a href="index_product.php">Cadastrar Produto</a>
    </div>
</body>
</html>