
<!DOCTYPE html>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta charset="utf-8">
    	<title>Home</title>
    	<link rel="stylesheet" href="src/estilo.css">
    	<?php require_once("complementos/bootstrapcdn.html");
    		  require_once("sql/Sql.php");
    
    		  if (isset($_GET['i'])) {
    		  	$id = $_GET['i'];
    		  }
    		  $sql = new Sql;
    		   $ap = $sql->descreveImovel($id);
    	 ?>
    	<style type="text/css">
    		main{margin-top: 30px;}
    	</style>
    </head>
    <body>
        <?php include_once('header.php');?>
        <main class="container-fluid">
			<div class="row">
				<div class="col text-center" >
					<h3 class="titleB text-center" style="color: black"><?= $ap->titulo;?></h3>
					<span class="badge badge-pill badge-success"><?= $ap->quartos . 'Quarto(s)'?></span>
					<?php if ($ap->piscina == "Sim") { ?>
                        <span class="badge badge-pill badge-success"> Piscina</span>
                    <?php } ?>
                    <?php if ($ap->portaria == "Sim") { ?>
                        <span class="badge badge-pill badge-success"> Portaria 24h</span>
                    <?php } ?>
                    <?php if ($ap->lazer == "Sim") { ?>
                        <span class="badge badge-pill badge-success"> Área de Lazer</span>
                    <?php } ?>
                    <?php if ($ap->cobertura == "Sim") { ?>
                        <span class="badge badge-pill badge-success">Cobertura</span>
                    <?php } ?>
                    <?php if ($ap->disponivel == "1") { ?>
                        <span class="badge badge-pill badge-success"> Disponivel</span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-warning"> Indisponivel</span>
                    <?php } ?>
					<hr>
				</div>
			</div>
			<div class="row" id='aviso'>
					<?php if($ap->disponivel == 0){?>
					    <div class="card text-white bg-danger col-md-8 col-11 offset-md-2">
                            <div class="card-header text-center"><b>Ops!</b> =(
                                <span class='badge badge-light' style='float: right;' id='fecha'>X</span>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center">Aparentemente esse imóvel já está reservado atualmente.</p>
                            </div>
                        </div>
					 <?php }?>
			</div>
			<div class='row ' style='background: rgba(0,0,0,0.1); padding: 20px;'>
			    <div class=' col-md-8 offset-md-4'>
			        <img src='<?= $ap->foto1; ?>' class='img-thumbnail' style='width: 500px; height:400px'>
			    </div>
			</div>
	</main>
	</body>
	<script>
		    $('#fecha').click(function(){
		        $('#aviso').hide();
		    });
	</script>
	<footer class="bg-dark font-weight-light text-center container-fluid">
    <small style="color: white"> Entre em contato e faça sua reserva! <br> Tel: 99999-9999 | Email: contato@espaco10.com
        <br>Made by: @lucas.FB <br>
        <a href="login/admin.php">login</a></small>
</footer>
</html>