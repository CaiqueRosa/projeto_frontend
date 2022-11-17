<?php
    $nome = $_POST ['nomeproduto'];
    $preco = $_POST ['preco'];
    $estoque = $_POST ['estoque'];
    $codigo = $_POST ['codigo'];
    $strcon = mysqli_connect ("localhost","root","","papelaria") or die ("Erro ao conectar com o banco");
    $sql = "INSERT INTO Produto(nome, preco, estoque, codigo) VALUES ('".$nome."' , '".$preco."', '".$estoque."', '".$codigo."');"; 
    mysqli_query($strcon, $sql) or die ('Erro ao tentar cadastrar registro'); 
    echo "Produto cadastrado com sucesso";
 ?>