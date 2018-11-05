<?php 
	require_once('../sql/Sql.php');

	$id_user = $_POST['cliente'];
	$id_imovel = $_POST['ap'];
	$valorT = $_POST['valorT'];
	$dataE = $_POST['dataE'];
	$dataS = $_POST['dataS'];

	foreach ($_POST as $key => $value) {
		if ($value == "") {
			$mensagem = "preencha todos os campos";
			header("location: cadastrarReserva.php?m=$mensagem");
			exit();
		}
	}

	$sql = New Sql;
	$reserva = $sql->insereReserva($id_user,$id_imovel,$dataE,$dataS,$valorT);
	if ($reserva == "inserido") {
		$mensagem = "inserido OK";
		header("location: index.php?m=$mensagem");
	}else{
		$mensagem = "Erro ao inserir";
		header("location: index.php?m=$mensagem");
	}
 ?>