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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Papelaria</title>
  </head>

  <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #daf0f3;">
                <a class="navbar-brand" href="#">Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0 submit-button" type="submit" onclick="showAlert()">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        <main role="main" class="container">
            <h3 class="mt-5">Boas vindas, <?php echo $_SESSION['nome']; ?> !!</h3>
            
            <p class="lead">Nossa plataforma visa te oferecer a melhor experiência possível para o cadastro de seus produtos.</p>
            <p>Você pode começar a cadastrar seus produtos clicando em <strong>Cadastrar Produto</strong></p>
                
            <div style="padding-top: 2rem;">
                <a style="text-decoration: underline" href="index_produto.php">Cadastrar Produto</a> |
                <a style="text-decoration: underline" href="">Listar Produtos</a> |
                <a style="text-decoration: underline" href="logout.php">Sair</a> 
            </div>

            <p style="padding-top: 2rem;">Qualquer dúvida ou feedback entre em contato conosco pelo e-mail <code>papelaria@contato.com.br</code></p>
        </main>

    </body>
    <script>
        function showAlert() {
            alert("Oppss!! Não encontramos o que você estava buscando.");
        }
    </script>
</html>