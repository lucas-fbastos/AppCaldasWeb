<?php 
	require_once('../sql/Sql.php');
	

 ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Perfil</title>
		<meta charset="utf-8">
		<style type="text/css">
			table{
			     table-layout: fixed;
			}
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
		<header class="container-fluid ">
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="#">Espaço 10</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item ">
			        <a class="nav-link" href="../index.php">Home</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="index.php">Perfil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="../sobre.php">Sobre a Cidade</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Sair</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>
		<div class="container-fluid">
			<div class="row ">
				<div class=" col-md-6 offset-md-3 shadow-lg p-3 mb-5 border rounded">
					<div class="titleB text-center">Imóveis</div>
				</div>

			</div>
			
			<div class="col-md-10  offset-md-1 shadow-lg p-3 mb-5 border border-primary rounded">
				<a class="btn btn-secondary" href="index.php" style="margin-bottom: 10px">Voltar</a>
				<table class="table table-striped" cellspacing="10">
				  <thead>
				    <tr>
				      <th scope="col">Título</th>
				      <th scope="col">Disponível</th>	
				      <th scope="col" >Ações</th>
				    </tr>
				  </thead>
				  <?php $sql = New Sql;
				  		$aps = $sql->selectTodosAps();
				  		$tamanho = count($aps);
				   ?>
				  <tbody>
				  	<?php for ($i=0; $i < $tamanho ; $i++) {  ?>
				    <tr>
				       <td><?= $aps[$i]['titulo'] ; ?></td>
				      <td><?php echo $aps[$i]['disponivel']== 1 ?  'Sim' : 'Não'; ?></td>
				      <td><button class="btn btn-primary">Editar</button>
				       <button class="btn btn-danger">Apagar</td>
				    </tr>
				    <?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
	</body>
	</html>