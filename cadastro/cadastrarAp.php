<?php 
require_once('../sql/Sql.php');
	//upload imagem 

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		# code...
		
	$file = $_FILES["foto"];
    $file2 = $_FILES["foto2"];
    $file3 = $_FILES["foto3"];
	function uploadFoto($file){
	 	if ($file["error"]) {
	 		throw new Exception("Error: ". $file["error"]);
	 	}

	 	$dirUploads = "uploads";
	 	if (!is_dir($dirUploads)) {
	 		mkdir($dirUploads, 0775, true);
	 	 }
	 	preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $file["name"], $ext);
	 	$nome_imagem = md5(uniqid(time())) . ".". $ext[1];
	 	$nome_imagem = '..' . DIRECTORY_SEPARATOR ."images".DIRECTORY_SEPARATOR .$dirUploads. DIRECTORY_SEPARATOR . $nome_imagem;
	 	 if (move_uploaded_file($file["tmp_name"], $nome_imagem)) {
	 	 	//echo "upload realizado";
	 	 	return $nome_imagem;
	 	 }else{
	 	 	throw new Exception("Não foi possível enviar o arquivo", 1);
	 	 	
	 	 }
	 }
	$foto1 = uploadFoto($file);
	if($_FILES["foto2"]['error'] != 4){
	    $foto2 = uploadFoto($file2);
	}else{
	    $foto2 = null;
	}
	if($_FILES["foto3"]['error'] != 4){
	    $foto3 = uploadFoto($file3);
	}else{
	     $foto3 = null;
	}
 	 // fim upload

 	 $titulo = $_POST['campoTitulo'];
 	 $quartos = $_POST['quartos'];
 	 $pessoas = $_POST['nroPessoas'];
 	 $piscina = $_POST['piscina'];
 	 $lazer = $_POST['areaLazer'];
 	 $portaria = $_POST['portaria'];
 	 $cobertura = $_POST['cobertura'];
 	 $bairro = $_POST['bairroAp'];
 	 $endereco = $_POST['enderecoAp'];
 	 $numero = $_POST['numeroAp'];
 	 $complemento = $_POST['complemento'];
 	 $desc = $_POST['conteudo'];

 	 function verificaDados(){
		foreach ($_POST as $key => $value) {
			if ($value == "" and $key != "complemento") {
				$erro = "<script> alert('Preencha todos os campos!')</script>";
				header("location:../perfil/index.php?m=$erro");
			}
		}
	}	
	//echo $desc;
	verificaDados();
	$sql = New Sql;
	if ($sql->insertAp($titulo,$quartos,$pessoas,$portaria,$piscina,$lazer,$cobertura,$bairro,$numero,$endereco,$complemento,$desc,$foto1,$foto2,$foto3)) {
		$mensagem = 'inserido OK';
	header("location: ../perfil/index.php?m=$mensagem");
	}else{
		echo "erro";
	}
	
}
 ?>