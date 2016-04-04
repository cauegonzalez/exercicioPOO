    <html>
        <head>
            <title>Clientes</title>
            <meta charset="utf-8">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

            <script src="js/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>
                                Clientes
                            </h1>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-hover table-condensed">
                                        <?php
                                            include_once 'modelCliente.php';
                                            if (!isset($_GET['order']))
                                            {
                                                $ordem = 'asc';
                                                $arrayClientes = ordenaClientes($ordem, $arrayClientes);
                                                $ordem = 'desc';
                                            }
                                            else
                                            {
                                                $arrayClientes = ordenaClientes($_GET['order'], $arrayClientes);
                                                if ($_GET['order'] == 'asc')
                                                {
                                                    $ordem = 'desc';
                                                }
                                                else
                                                {
                                                    $ordem = 'asc';
                                                }
                                            }
                                        ?>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>#</a>
                                                </th>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>Nome</a>
                                                </th>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>CPF</a>
                                                </th>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>Endereço</a>
                                                </th>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>Data de Nascimento</a>
                                                </th>
                                                <th>
                                                    <a href='index.php?order=<?php echo $ordem;?>'>Idade</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                if (isset($_GET['id']))
                                                {
                                                    $arrayClientes = detalheCliente($_GET['id'], $arrayClientes);
                                                }
                                                foreach ($arrayClientes as $key=>$value)
                                                {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $key+1;?>
                                                    </td>
                                                    <td>
                                                        <a href='index.php?id=<?php echo $key;?>'><?php echo $value->nome;?></a>
                                                    </td>
                                                    <td>
                                                        <?php echo $value->endereco;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $value->cpf;?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $dataNascimento = new DateTime($value->dataNascimento);
                                                            echo $dataNascimento->format('d/m/Y');
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            $dataAtual = new DateTime();
                                                            $dataNascimento = new DateTime($value->dataNascimento);
                                                            $dataNascimento->format("d/m/Y");
                                                            $idade = $dataAtual->diff($dataNascimento);
                                                            echo $idade->y." anos e ".$idade->m." meses";
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    <?php
                                    if (isset($_GET['id']))
                                    {
                                        ?>
                                        <a href="index.php">Listar Todos</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>