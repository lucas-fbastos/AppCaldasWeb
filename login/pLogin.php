<?php
	require("../sql/Sql.php");
	$login = $_POST['login'];
	$pass = $_POST['senha'];

	

	verificaDados();
	$sql = New Sql;
	$id = $sql->loginUser($login,$pass);
	if ($id > 0){
	    session_start();
	    $_SESSION['idCliente'] = $id;
	    header("location:../index.php?");
	};
	exit();
	function verificaDados(){
		foreach ($_POST as $key => $value) {
			if ($value == "") {
				$erro = "Preencha todos os campos!";
				header("location:../index.php?m=$erro");
				exit();
			}
		}
	}
 ?>