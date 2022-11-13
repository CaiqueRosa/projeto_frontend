<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            //Navega para a pagina informada
            header("Location: product.php");

        }else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>
<div class="container">
        <div class="info">
            <img src="../img/logo-papelaria.png" alt="Logo">
        </div>
        <form class="login-form" action="" method="POST">
            <input type="text" placeholder="Usuário" name="email" id="username" >
            <p style="color: red">
                <?php
                if(isset($_POST['email'])){
                    if(strlen($_POST['email']) == 0){
                        echo "Preencha seu e-mail";
                    }
                }
                ?>  
            </p>
            <input type="password" placeholder="Senha" name="senha" id="password"  >
            <p style="color: red">
                <?php
                if(isset($_POST['senha'])){
                    if(strlen($_POST['senha']) == 0){
                        echo "Preencha sua senha";
                    }
                }
                ?>  
            </p>

            <button type="submit" name="enviar" value="Envia" id="btn-form">Entrar</button>
            
        </form>
    </div>
    
</body>
</html>