<?php
session_start();

require_once('sql/Sql.php');
$sql = New Sql;
$aps = $sql->selectTodosAps();
if(isset($_SESSION['idCliente'])){
$cliente = $sql->selectCliente($_SESSION['idCliente']);
}
//echo $aps;
$tamanho = (count($aps));
?>