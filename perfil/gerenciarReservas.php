<?php
require_once('pPerfil.php');
require_once('../sql/Sql.php');


?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
    <meta charset="utf-8">
    <style type="text/css">
        .container{
            margin-top: 20px;
        }
        .button-m{
            width: 124px;
        }
        .center{
            text-align: center;
        }
        .brilho{
            box-shadow: 0 0px 20px 0 rgba(66,139,202,1.0);
        }
        .cardPadding{
            margin-top: 5%
        }
        header{
            margin-bottom: 5%
        }

    </style>
    <link rel="stylesheet" type="text/css" href="../src/estilo.css">
    <?php require('../complementos/bootstrapcdn.html'); ?>
</head>
<body>
<?php include_once('../headerAlt.php');?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-12 col-md-6 offset-md-3 shadow-lg p-3 mb-5 border rounded">
            <div class="titleB text-center" id='mensagem'>Reservas</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1 shadow-lg p-3 mb-5 border border-primary rounded">
            <a class="btn btn-secondary" href="index.php" style="margin-bottom: 10px">Voltar</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ativo</th>
                        <th>Nome</th>
                        <th >Imóvel</th>
                        <th >Data Entrada</th>
                        <th >Data Saída</th>
                        <th >Valor Total</th>
                        <th >Valor Pago</th>
                        <th >Valor a pagar</th>
                        <th  colspan="3" class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <?php $sql = New Sql;
                    $reservas = $sql->selectTodasReservas();
                    $tamanho = count($reservas);
                    ?>
                    <tbody>
                    <?php for ($i=0; $i < $tamanho ; $i++) {  ?>
                        <tr>
                            <td scope="row">
                                <?php
                                if($reservas[$i]['ativo'] == 0){;
                                    echo "Inativo";
                                }else{
                                    echo "Ativo";
                                }
                                ?></td>
                            <td scope="row"><?= $reservas[$i]['nome']; ?></td>
                            <td scope="row"><?= $reservas[$i]['titulo']; ?></td>
                            <td scope="row"><?= $reservas[$i]['dataE']; ?></td>
                            <td scope="row"><?= $reservas[$i]['dataS']; ?></td>
                            <td scope="row"><?= $reservas[$i]['valorTotal']; ?></td>
                            <td scope="row"><?= $reservas[$i]['valorPago']; ?></td>
                            <td scope="row">
                                <?php $total = $reservas[$i]['valorTotal'];
                                $pago = $reservas[$i]['valorPago'];
                                $restante = $total - $pago;
                                echo $restante;
                                ?>
                             <form id='finaliza' method='post' action='pFinalizar.php'>
                                <input type="hidden" readonly value='<?= $reservas[$i]['valorTotal']?>' name='vT'>
                                <input type="hidden" readonly value='<?= $reservas[$i]['valorPago']?>' name='vP'>
                                <input type="hidden" readonly value='<?= $reservas[$i]['id_reserva']?>' name='id'>
                            </td>
                            <td scope="row"><button class="btn btn-primary">Editar</button></td>
                            <td scope="row"><button class="btn btn-danger">Apagar</td>
                            <td scope="row"><button class="btn btn-success" type='submit'> Finalizar </button></td>
                        </tr>
                        </form>
                    <?php } ?>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>