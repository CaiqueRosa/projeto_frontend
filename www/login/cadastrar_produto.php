<?php
    $nome = $_POST ['nomeproduto'];
    $preco = $_POST ['preco'];
    $codigo = $_POST ['codigo'];
    $strcon = mysqli_connect ("localhost","root","","login") or die ("Erro ao conectar com o banco");
    $sql = "INSERT INTO produtos VALUES ('".$nome."' , '".$preco."', '".$codigo."');"; 
    mysqli_query($strcon, $sql) or die ('Erro ao tentar cadastrar registro'); 
    echo "Produto cadastrado com sucesso";

    ?>