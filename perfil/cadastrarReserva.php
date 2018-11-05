<?php require_once('pPerfil.php'); 
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
		<link rel="stylesheet" type="text/css" href="../estilo.css">
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
  <div class="row">
    <div class="col-sm-12 col-md-8 offset-md-2">
        <h1 class="titleB text-center">reserva</h1>
      <form  class="shadow-lg p-3 mb-5" method="POST" action="pCadastrarReserva.php">
        <div class="border border-info">
        <div class="row">
          <div class="col">
            <label for="#cliente" class="text" >Cliente </label>
            <select id="cliente" name="cliente" class="form-control">
            	<?php $sql = New Sql;
            		  $clientes = $sql->selectTodosClientes();
            		  $tamanho = count($clientes);
            		  for ($i=0; $i < $tamanho ; $i++) { ?>
            		  	<option value="<?= $clientes[$i]['id_cliente'];?>"><?= $clientes[$i]['nome'];?></option>
            	<?php }?>
            </select>
          </div>
       
          <div class="col">
            <label for="#ap" class="text" >Imóvel </label>
            <select id="ap" name="ap" class="form-control">
            	<?php $sql = New Sql;
            		  $aps = $sql->selectTodosAps();
            		  $tamanho = count($aps);
            		  for ($i=0; $i < $tamanho ; $i++) { ?>
            		  	<option value="<?= $aps[$i]['codigoanuncio'];?>"><?= $aps[$i]['titulo'];?></option>
            	<?php }?>
            </select>
          </div>
      	</div>
      	<div class="row">
          <div class="col">
            <label for="#campoDataEntrada" class="text">Data de entrada</label>
            <input id="campoDataEntrada" type="date" name="dataE" class="form-control" required="">
          </div>
           <div class="col">
            <label for="#campoDataSaida" class="text">Data de saída</label>
            <input id="campoDataSaida" type="date" name="dataS" class="form-control" required="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="#valorT">Valor Total</label>
            <input id="valorT" type=text name="valorT" class="form-control" required="">
          </div>
        </div>
          <div class="col">
            <button  id="" style="margin-top: 20px" type="submit" class="btn btn-primary btn-block botaoForm">
              Enviar
            </button>
            <button  id="botaoForm" style="margin-bottom: 20px" type="reset" class=" botaoForm btn btn-secondary btn-block">
              Limpar
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col text-center text-danger" id="mensagem" >
            <font size="9"><?php if(isset($_GET['m'])){
              echo $_GET['m'];
              $_GET['m'] = "";
            } ?></font>
          </div>
        </div>
        </div>
      </form> 
    </div>
  </div>
</div>
</body>
</html>