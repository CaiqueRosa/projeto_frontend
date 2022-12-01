<?php

include('protect.php');

?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Homepage Papelaria</title>
  </head>

  <body>
    <?php
        include "./header.component.php";
        echo createHeader();
    ?>
        <main role="main">
            <div class="jumbotron" style="height: 300px;">
                <div class="container">
                    <h1 class="mt-5">Boas vindas, <?php echo $_SESSION['nome']; ?> !!!</h1>
                    <p class="lead">Nossa plataforma visa te oferecer a melhor experiência possível para o cadastro de seus produtos.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-4 coluna">
                        <h2>Cadastrar Produto</h2>
                        <img src="..\img\new.png" style="height: 100px">
                        <p>Você pode começar a cadastrar seus produtos clicando no botão abaixo!</p>
                        <a class="btn btn-primary" href="index_produto.php" role="button">Cadastrar Produto</a>
                    </div>
                    <div class="col-4 coluna">
                        <h2>Listar Produtos</h2>
                        <img src="..\img\checklist.png" style="height: 100px">
                        <p>Você também pode ver a lista completa dos produtos clicando no botão abaixo!</p>
                        <a class="btn btn-primary" href="" role="button">Listar Produtos</a>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include "./footer.component.php";
            echo createFooter();
        ?>
        
    </body>
    <script>
        function showAlert() {
            alert("Oppss!! Não encontramos o que você estava buscando.");
        }
    </script>
</html>