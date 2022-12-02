<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/listagem.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Cadastro de Produto</title>
    </head>
    <body>
        <?php
            include "./header.component.php";
            echo createHeader();

            include("conexao.php");  
            $consulta = "SELECT * FROM produto";
            $con = $mysqli->query($consulta);
            if ($con->num_rows > 0) {
                echo '
                    <table>
                        <tr id="cabecalho">
                            <td><h6>ID</h6></td>
                            <td><h6>NOME</h6></td>
                            <td><h6>PRECO</h6></td>
                            <td><h6>ESTOQ</h6></td>
                            <td><h6>COD</h6></td>
                            <td><h6>OBS</h6></td>
                            <td><h6>FAMILIA</h6></td>
                            <td><h6>MED</h6></td>
                            <td><h6>SITUACAO</h6></td>
                            <td><h6>CRIACAO</h6></td>
                            <td><h6>LIBERACAO</h6></td>
                            <td class="ultimo"><h6>DESCRICAO</h6></td>
                        </tr>
                ';
                while($row = $con->fetch_assoc()) {
                    echo '<tr><td>'.$row["id"].'</td>';
                    echo '<td>'.$row["nome"].'</td>';
                    echo '<td>'.$row["preco"].'</td>';
                    echo '<td>'.$row["estoque"].'</td>';
                    echo '<td>'.$row["codigo"].'</td>';
                    echo '<td>'.$row["obs"].'</td>';
                    echo '<td>'.$row["familia_de_itens"].'</td>';
                    echo '<td>'.$row["unidade_medida"].'</td>';
                    echo '<td>'.$row["situacao_do_item"].'</td>';
                    echo '<td>'.$row["data_criacao"].'</td>';
                    echo '<td>'.$row["data_liberacao"].'</td>';
                    echo '<td class="ultimo">'.$row["descricao_item"].'</td></tr>';
                } 
                echo '</table>';
            } else {
                echo "Nenhum item cadastrado";
            }

            include "./footer.component.php";
            echo createFooter();
        ?>
    </body>
</html>