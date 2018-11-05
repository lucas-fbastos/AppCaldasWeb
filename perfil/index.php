<?php require_once('pPerfil.php');
     
 
   
	if (isset($_GET['m'])) {
		$test = $_GET['m'];
		$imprime = "<script>alert(' $test');</script>";
		echo $imprime;
		$_GET['m'] = "";

	}
	
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
			#userName{
			    text-transform: capitalize;
			}
			
		    #img{
		        border-radius: 10px;
		        background: url('../images/bgPerf.jpg');
		        margin-top: 1%;
		        padding: 20px;
		    }
		   
		    
		   
		</style>
		<link rel="stylesheet" type="text/css" href="../src/estilo.css">
		<?php require('../complementos/bootstrapcdn.html'); ?>
	</head>
	<body>
		<?php include_once('headerAdmin.php');?>
		<div class="container shadow-lg p-3 mb-5"> 
			
			<div class="row">
				<div class=" d-none d-sm-block col-md-3">
					<div class="card">
				    	<img class="card-img-top" src="../images/user.jpg" alt="Card image">
				    	<div class="card-body">
				      		<h4 class="card-title" id='userName'><?= $user->nome ?></h4>
				      		<p class="card-text">Texto da descrição do user. Texto de exemplo para demonstração do card.</p>
				      		<button class="btn btn-info">Alterar Dados</button>
	    				</div>
	  				</div>
  				</div>
				<div class="col-12 col-sm-12 col-md-9">
				    <div id='img'>
					    <div class="jumbotron " style=" background: transparent; padding: 10px; " >
				        	<h1 class="titleB text-center">Bem Vindo!</h1><br/>
					
					    </div>
					    <div class="botoes">
							<button class="btn btn-info" 
									id="modulos" 
									data-toggle="tooltip"
									data-placement="top" 
									title="Módulos do sistema">
										Módulos
							</button>

							<button class="btn btn-info" 
									id="Mensagens" 
									data-toggle="tooltip"
									data-placement="top" 
									title="Mensagens">
										Mensagens
							</button>
					</div>
				</div>
					<hr>
					<div class="row" id="card">
						<div class="col-12 col-md-6 col-lg-4">
							<!-- Button trigger modal -->
							<div class="card hover cardPadding" style="height: 250px">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCenter">
							  			<span class="font-italic">Cadastrar<span>
									</button>
						    	<div class="card-body">
						      		<h4 class="card-title">Cadastro de  Apartamentos</h4>
						      		<p class="card-text">Preencha os campos do formulário para cadastrar um imóvel na plataforma online.</p>
			    				</div>
			  				</div>
	  					</div>
	  					<div class="col-12 col-md-6 col-lg-4">
							<div class="card hover cardPadding" style="height: 250px">
								<a href="../cadastro/cadastrar.php">
								<button type="button" class="btn btn-success btn-block">
							  			<span class="font-italic">Cadastrar <span>
									</button>
								</a>
						    	<div class="card-body">
						      		<h4 class="card-title">Cadastro de Clientes</h4>
						      		<p class="card-text">Preencha os campos do formulário para cadastrar um cliente na plataforma online.</p>
			    				</div>
			  				</div>
	  					</div>
	  					<div class="col-12 col-md-6 col-lg-4" >
							<div class="card hover cardPadding" style="height: 250px;">
								<a href="gerenciarReservas.php">
								<button type="button" class="btn btn-secondary btn-block ">
										<span class="font-italic">Gerenciar Reservas</span>	
								</button>
								</a>
						    	<div class="card-body">
						      		<h4 class="card-title">Gerenciamento Reservas</h4>
						      		<p class="card-text">Consulte ou altere o status das reservas.</p>
			    				</div>
			  				</div>
			  			</div>
			  			<div class="col-12 col-md-6 col-lg-4" >
							<div class="card hover cardPadding" style="height: 250px;">
								<a href="gerenciarApartamentos.php">
								<button type="button" class="btn btn-secondary btn-block ">
										<span class="font-italic">Gerenciar Imóveis</span>	
								</button>
								</a>
						    	<div class="card-body">
						      		<h4 class="card-title">Gerenciamento de Imóveis</h4>
						      		<p class="card-text">Consulte ou altere os dados dos imóveis.</p>
			    				</div>
			  				</div>
			  			</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="card hover cardPadding" style="height: 250px;">
								<button type="button" class="btn btn-secondary ">
										<span class="font-italic">Gerenciar cadastros</span>	
								</button>
						    	<div class="card-body">
						      		<h4 class="card-title">Gerenciamento Clientes</h4>
						      		<p class="card-text">Edite e/ou remova clientes da plataforma.</p>
			    				</div>
			  				</div>
			  			</div>
			  			<div class="col-12 col-md-6 col-lg-4">
							<div class="card hover cardPadding" style="height: 250px">
								<a href="../cadastro/cadastrar.php">
								<button type="button" class="btn btn-warning btn-block" style="color: white">
							  			<span class="font-italic">Contrato<span>
									</button>
								</a>
						    	<div class="card-body">
						      		<h4 class="card-title">Gerador de Contratos</h4>
						      		<p class="card-text">Utilize os dados do usuário desejado para criar um contrato de locação.</p>
			    				</div>
			  				</div>
	  					</div>
	  					<div class="col-12 col-md-6 col-lg-4">
							<div class="card hover cardPadding" style="height: 250px">
								<a href="../perfil/cadastrarReserva.php">
								<button type="button" class="btn btn-danger	 btn-block">
							  			<span class="font-italic">Reserva<span>
									</button>
								</a>
						    	<div class="card-body">
						      		<h4 class="card-title">Agende Reservas</h4>
						      		<p class="card-text">Escolha qual cliente está em cada apartamento.</p>
			    				</div>
			  				</div>
	  					</div>
	  				</div>
					
					<!-- Modal -->
					<div class="modal fade bd-example-modal-lg" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="ModalCenterTitle">Cadastro:</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<form class="needs-validation" method="POST" action="../cadastro/cadastrarAp.php" enctype="multipart/form-data" id="formcadastro">
					     		<div class="form-group">
					     			<div class="form-row">
					     				<div class="col">
					     					<label for="#campoTitulo">Título</label>
					     						<input type="text"  required name="campoTitulo" id="campoTitulo" class="form-control">
					     					<div class="invalid-tooltip">
        										Digite o Título do anúncio.
      										</div>
      										  <div class="valid-tooltip">
      											OK!
   											   </div>
					     				</div>
					     			</div>
					     			<div class="form-row">
					     				<div class="col">	
					     					<label for="#enderecoAp">Endereço</label>
					     						<input type="text" required name="enderecoAp" id="enderecoAp" class="form-control">
					   					</div>
					     				
					     			</div>
					     			<div class="form-row">
					     				<div class="col-6">	
					     					<label for="#bairro">Bairro</label>
					     						<input type="text" required name="bairroAp" id="bairro" class="form-control">
					   					</div>
					   					<div class="col-3">
					   						<label for="#numeroAp">Número</label>
					   							<input type="text" required name="numeroAp" id="numeroAp" class="form-control">
					   					</div>
					   					<div class="col-3">
					   						<label for="#complemento">Complemento</label>
					   							<input type="text" name="complemento" id="complemento" class="form-control">
					   					</div>
					   				</div>
					   				<div class="form-row">
					   					<div class="col">
					   						<label for="#quartos">Qtd. Quartos</label>
					   							<select id="quartos" name="quartos" required class="form-control">
					   								<option value="1">1</option>
					   								<option value="2">2</option>
					   								<option value="3">3</option>
					   								<option value="4">4 ou mais</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#nroPessoas">Capacidade</label>
					   							<select class="form-control" required id="nroPessoas" name="nroPessoas">
					   								<option value="apenas 1 pessoa">Apenas 1 pessoa</option>
					   								<option value="até 2 pessoas">Até 2 pessoas</option>
					   								<option value="até 3 pessoas">Até 3 pessoas </option>
					   								<option value="entre 4 a 6 pessoas">Entre 4 a 6 pessoas</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#piscina">Piscina?</label>
					   							<select class="form-control" required id="piscina" name="piscina">
					   								<option value="sim"> Sim</option>
					   								<option value="não"> Não</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#areaLazer">Área de lazer?</label>
					   							<select class="form-control" required id="areaLazer" name="areaLazer">
					   								<option> Sim</option>
					   								<option> Não</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#portaria">Portaria 24h?</label>
					   							<select class="form-control" required id="portaria" name="portaria">
					   								<option> Sim</option>
					   								<option> Não</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#cobertura">Cobertura?</label>
					   							<select class="form-control" required id="cobertura" name="cobertura">
					   								<option> Sim</option>
					   								<option> Não</option>
					   							</select>
					   					</div>
					   				</div>
					   				<div class="form-row">
					   					<label for="#campoFoto">Foto 1</label>
					   						<input type="file" name="foto" id="campoFoto" class="form-control">
					   				</div>
					   				<div class="form-row">
					   					<label for="#campoFoto2">Foto 2</label>
					   						<input type="file" name="foto2" id="campoFoto2" class="form-control">
					   				</div>
					   				<div class="form-row">
					   					<label for="#campoFoto3">Foto 3</label>
					   						<input type="file" name="foto3" id="campoFoto3" class="form-control">
					   				</div>
					   				<div class="form-row">
					   					<label for="#conteudo">Descrição</label>
					   						<textarea id="conteudo" onkeyup="this.value = this.value.slice(0, 140)" required class="form-control" name="conteudo"></textarea>
					   				</div>
					   		
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					        <button type="reset" class="btn btn-warning">Limpar</button>
					        <button type="submit" class="btn btn-primary">Cadastrar</button>
					        </form>
					      </div>
					    </div>
					  </div>
					</div>
				<!-- 	fim modal -->''
				</div>
			</div>
		</div>
		</div>
	<footer class="bg-dark font-weight-light text-center">
		<small style="color: white">  Entre em contato e faça sua reserva! <br> Tel: 99999-9999 | Email: contato@espaco10.com <br>Made by: @lucas.FB <br></small>
	</footer>

		<script >
			$('.hover').hover(function(){
				$(this).toggleClass('brilho');
			});
			$('#modulos').click(function(){
				$('#card').toggle();
			});

</script>

	
		
	</body>
</html>