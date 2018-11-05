<?php

$valorTotal = $_POST['vT'];
$valorPago = $_POST['vP'];
$id = $_POST['id'];
if ($valorPago === null || $valorPago == ''){
    $valorPago = 0;
}

$valorRestante = $valorTotal - $valorPago;

require_once ('../sql/Sql.php');

$sql = new Sql;
$reserva = $sql->descreveReserva($id);

echo 'O valor total da reserva é: ' . $reserva->valorTotal . '<br/>';
echo 'O valor pago da reserva é: ' . $reserva->valorPago . '<br/>';
if($valorRestante > 0){
    echo 'O valor restante é: ' . $valorRestante . '<br/>';
?> 

}


?>