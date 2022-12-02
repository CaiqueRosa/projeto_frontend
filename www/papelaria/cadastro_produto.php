<?php
    $nome = $_POST ['nomeproduto'];
    $preco = $_POST ['preco'];
    $estoque = $_POST ['estoque'];
    $codigo = $_POST ['codigo'];
    $obs = $_POST ['obs'];
    $familia_de_itens = $_POST ['familia_de_itens'];
    $unidade_medida = $_POST ['unidade_medida'];
    $situacao_do_item = $_POST ['situacao_do_item'];
    $data_liberacao = $_POST ['data_liberacao'];
    $descricao_item = $_POST ['descricao_item'];

    $strcon = mysqli_connect ("localhost","root","","papelaria") or die ("Erro ao conectar com o banco");

    $sql = "INSERT INTO Produto(nome, preco, estoque, codigo, obs, familia_de_itens, unidade_medida, situacao_do_item, data_liberacao, descricao_item) 
    VALUES('".$nome."' , '".$preco."', '".$estoque."', '".$codigo."', '".$obs."', '".$familia_de_itens."', 
    '".$unidade_medida."', '".$situacao_do_item."', '".$data_liberacao."', '".$descricao_item."');"; 

    mysqli_query($strcon, $sql) or die ('Erro ao tentar cadastrar registro');

    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('PRODUTO CADASTRADO COM SUCESSO!')
        window.location.href='index.php';
    </SCRIPT>");
?>