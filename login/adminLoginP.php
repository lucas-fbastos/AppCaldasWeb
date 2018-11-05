<?php 

	include("../sql/Sql.php");

	$login = $_POST['login'];
	$pass = $_POST['senha'];

	
    if(isset($_SESSION['idCliente'])){
       unset($_SESSION['idCliente']);
       echo ($_SESSION['idCliente']);
       die();
    }
    
  
	verificaDados();
	$sql = New Sql;
	$user = $sql->login($login,$pass);
	session_start();
	if ($user != '' or $user != null) {
		$_SESSION['userID'] = $user;
		$_SESSION['admin'] = true;
		header('location: ../perfil/index.php');
	}
	function verificaDados(){
		foreach ($_POST as $key => $value) {
			if ($value == "") {
				$erro = "Preencha todos os campos!";
				header("location:admin.php?m=$erro");
				exit();
			}
		}
	}
 ?>