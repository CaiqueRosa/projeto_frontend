<?php
require_once "conexao.php";
 
$email = $senha = $nome = "";
$email_err = $senha_err = $name_error = "";
 
// Verificacao dos dados do form quando é submitido 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Valida input nome
    if(empty(trim($_POST["nome"]))){
        $name_error = "Preencha o nome";     
    } else{
        $nome = trim($_POST["nome"]);
    }
 
    // Valida input email
    if(empty(trim($_POST["email"]))) {
        $email_err = "Preencha o email";
    } elseif(!preg_match('#^\S+@\S+\.\S+#', trim($_POST["email"]))) {
        $email_err = "Deve ser um e-mail válido.";
    } else {
        $sql = "SELECT id FROM Usuario WHERE email = ?";
        
        if($stmt = mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = trim($_POST["email"]);
            
            // Tentativa de inserir no bd
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "Já existe um usuário com esse e-mail cadastrado.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Algo deu errado. Tente novamente mais tarde.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    // Valida input da senha
    if(empty(trim($_POST["senha"]))){
        $senha_err = "Preencha a senha.";     
    } elseif(strlen(trim($_POST["senha"])) < 6) {
        $senha_err = "A senha deve conter no mínimo 6 caracteres.";
    } else {
        $senha = trim($_POST["senha"]);
    }
    
    
    // Verificando se não temos erros antes de inserir no bd
    if(empty($email_err) && empty($senha_err) && empty($name_error)){
        
        $sql = "INSERT INTO Usuario (nome, email, senha) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($mysqli, $sql)){
            mysqli_stmt_bind_param($stmt, "sss",  $param_nome, $param_email, $param_senha);
            
            // Seta os valores
            $param_nome = $nome;
            $param_email = $email;
            $param_senha =$senha;
            
            // Tentativa de executar o insert
            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");  // Redirecionando para pagina de login ao cadastrar usuario
            } else{
                echo "Algo deu errado. Tente novamente mais tarde.";
            }

            mysqli_stmt_close($stmt);
        }
    }
    
    // Fechando a conexao
    mysqli_close($mysqli);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar-se</title>
    <link rel="stylesheet" href="../css/user_registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <div class="container mx-auto h-auto">
        <div class="c-header-info">
            <img src="../img/newUser.webp" alt="user" width="200px">
            <div>
                <h2 class="text-center title">Cadastrar-se</h2>
                <p class="text-center subTitle">Preencha os campos para criar sua conta.</p>
            </div>
        </div>
        <form class="w-80 mx-auto form-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-form">
                <input placeholder="Digite seu nome" type="text" name="nome" class="form-control" <?php echo (!empty($name_error)) ? 'is-invalid' : ''; ?>" value="<?php echo $nome; ?>">
                <span class="invalid-feedback"><?php echo $name_error; ?></span>
            </div>
           
            <div class="input-form">
                <input type="text" placeholder="exemplo@exemplo.com.br" name="email" class="form-control" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>  
              
            <div class="input-form">
                <input type="senha" placeholder="Senha" name="senha" class="form-control" <?php echo (!empty($senha_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $senha; ?>">
                <span class="invalid-feedback"><?php echo $senha_err; ?></span>
            </div>

            <div class="c-btn ">
                <input type="submit" class="btn btn-primary button" value="Cadastrar">
            </div>
            <p class="title-account">Já possui uma conta? <a href="login.php">Entre aqui</a>.</p>
        </form>
    </div>    
    </div>
</body>
</html>