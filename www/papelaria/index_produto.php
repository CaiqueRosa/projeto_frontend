<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro-produto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cadastro de Produto</title>
</head>
<body>
    <?php
        include "./header.component.php";
        echo createHeader();
    ?>
    <div class="wrapper">
        <section class="container">
            <div class="card form-produto">  
                <div class="card-header">Cadastro de Produto</div>  

                <div class="card-body">
                    <h2 class="card-title">Novo Produto</h2>    
                    <p class="card-text">Preencha os dados abaixo.</p>  
                    
                    <form action="cadastro_produto.php" method="POST">
                        
                        <div class="form-group col-md-12">
                            <label>Nome produto<strong style="color:red">*</strong></label>
                            <input type="text" name="nomeproduto" class="form-control" required><br>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Descrição do Item<strong style="color:red">*</strong></label>
                            <textarea name="descricao_item" class="form-control input-append date" rows="3" required></textarea><br>
                        </div>
                        
                        <section class="form-row">
                            <div class="col">
                                <div class="form-group col">
                                    <label>Preço<strong style="color:red">*</strong></label>
                                    <input type="text" name="preco" class="form-control" required><br>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group col">
                                    <label>Estoque<strong style="color:red">*</strong></label>
                                    <input type="text" name="estoque" class="form-control" required><br>
                                </div>
                            </div>
                        </section>

                        <section class="form-row">
                            <div class="col">
                                <div class="form-group col">
                                    <label>Observação<strong style="color:red">*</strong></label>
                                    <input type="text" name="obs" class="form-control" required><br>
                                </div>
                            </div>

                             <!--data_criacao nao sera informada pelo usuário, esse campo no bd sempre é salvo com a data de agora-->
                            <div class="col">
                                <div class="form-group col">
                                    <label>Data de Liberação<strong style="color:red">*</strong></label>
                                    <input type="date" name="data_liberacao" class="form-control input-append date" required><br>
                                </div>
                            </div>
                        </section>

                        <section class="form-row">
                            <div class="col">
                                <div class="form-group col">
                                    <label>Código<strong style="color:red">*</strong></label>
                                    <input type="number" name="codigo" class="form-control" required><br>
                                </div>
                            </div>

                            <div class="col">                        
                                <div class="form-group col">
                                    <label>Familia de Itens<strong style="color:red">*</strong></label>

                                    <select type="select" name="familia_de_itens" class="form-control" required>
                                        <option disabled selected value=""> -- Selecione uma opção -- </option>
                                        <option value="mat-escolar">Material Escolar</option>
                                        <option value="mat-construcao">Material de Construção</option>
                                        <option value="mat-corporativo">Material Corporativo</option>
                                    </select>
                                </div>
                            </div>
                        </section>

                        <section class="form-row">
                            <div class="col">
                                <div class="form-group col">
                                    <label>Unidade de Medida<strong style="color:red">*</strong></label>

                                    <select type="select" name="unidade_medida" class="form-control" required>
                                        <option disabled selected value=""> -- Selecione uma opção -- </option>
                                        <option value="cm">Centímetro</option>
                                        <option value="m">Metro</option>
                                        <option value="km">Kilômetro</option>
                                        <option value="unidade">Unidade</option>
                                        <option value="g">Grama</option>
                                        <option value="kg">Kilograma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group col">
                                    <label>Situação do Item<strong style="color:red">*</strong></label>

                                    <select type="select" name="situacao_do_item" class="form-control" required>
                                        <option disabled selected value=""> -- Selecione uma opção -- </option>
                                        <option value="obsoleto">Totalmente Obsoleto</option>
                                        <option value="disponivel">Disponível</option>
                                    </select>
                                </div>
                            </div>
                        </section>

                        <div class="navigation-buttons">
                            <button type="submit" name="enviar" class="btn btn-primary">Cadastrar</button>
                            <a class="btn btn-outline-info" href="index.php">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div>
        <?php
            include "./footer.component.php";
            echo createFooter();
        ?>
    </div>  
    
</body>
</html>