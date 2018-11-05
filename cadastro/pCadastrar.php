<?php 
	 require("../sql/Sql.php");
	function verificaDados(){
		foreach ($_POST as $key => $value) {
			if ($value == "" and $key != "complemento") {
				$erro = "Preencha todos os campos!";
				header("location:cadastrar.php?m=$erro");
			}
		}
	}	
	function comparaSenha(){
		if ($_POST['senha'] != $_POST['cSenha']) {
			$erro = "Senhas não coincidem";
			header("location:cadastrar.php?m=$erro");
		}
	}
	$nome = $_POST['nome'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$cep = $_POST['cep'];
	$uf = $_POST['uf'];
	$complemento = $_POST['complemento'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$senha =$_POST['senha'];
	$telefone = $_POST['ddd'].$_POST['telefone'];

	verificaDados();
	comparaSenha();
	try {
	$sql = new Sql;
	$sql->insertuser($nome,$rg,$cpf,$email,$uf,$senha,$cidade,$telefone,$numero,$endereco,$complemento,$cep);	
	} catch (Exception $e) {
		
		header("location: cadastrar.php?m=$e");
		exit();
	}
		header("location: ../index.php");
		exit();
?>