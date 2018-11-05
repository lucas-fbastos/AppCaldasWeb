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
		<?php require('complementos/bootstrapcdn.html'); ?>
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
			        <a class="nav-link" href="index.php">Home</a>
			      </li>
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="sobre.php">Sobre</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Sair</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</header>
		<div class="container shadow-lg p-3 mb-5"> 
			
			<div class="row">
				<div class=" d-none d-sm-block col-md-3">
					<div class="card">
				    	<img class="card-img-top" src="images/user.jpg" alt="Card image">
				    	<div class="card-body">
				      		<h4 class="card-title">Nome Usuário</h4>
				      		<p class="card-text">Texto da descrição do user. Texto de exemplo para demonstração do card.</p>
				      		<a href="#" class="btn btn-info btn-lg">Info</a>
	    				</div>
	  				</div>
  				</div>
				<div class="col-12 col-sm-12 col-md-9">
					<div class="jumbotron">
					<h1 class="display-1 text-center">Titulo</h1><br/>
					<ul class="list-inline text-center">
						<a href="#" class="badge badge-dark">
							<li class="list-inline-item primary">Mensagens
									<span class="badge badge-light">5</span>
							</li>
						</a>
						<a href="#" class="badge badge-dark"><li class="list-inline-item">Configurar</li></a>
						<a href="#" class="badge badge-dark"><li class="list-inline-item">Ajuda</li></a>
					</ul>
					</div>
					<div>
							<button class="btn btn-info" 
									id="modulos" 
									data-toggle="tooltip"
									data-placement="top" 
									title="Módulos do sistema">
										Módulos
							</button>
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
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="card hover cardPadding" style="height: 250px;">
								<button type="button" class="btn btn-secondary ">
										<span class="font-italic">Gerenciar cadastros</span>	
								</button>
						    	<div class="card-body">
						      		<h4 class="card-title">Gerenciar</h4>
						      		<p class="card-text">Preencha os campos do formulário para cadastrar um imóvel na plataforma online.</p>
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
					      	<form class="needs-validation" >
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
					     					<label for="#enderecoAp">Bairro</label>
					     						<input type="text" required name="bairroAp" id="enderecoAp" class="form-control">
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
					   							<select id="quartos" required class="form-control">
					   								<option>1</option>
					   								<option>2</option>
					   								<option>3</option>
					   								<option>4 ou mais</option>
					   							</select>
					   					</div>
					   					<div class="col">
					   						<label for="#nroPessoas">Número de Pessoas</label>
					   							<select class="form-control" required id="nroPessoas" name="nroPessoas">
					   								<option>apenas 1</option>
					   								<option>até 2</option>
					   								<option>até 3 </option>
					   								<option>entre 4 a 6</option>
					   							</select>
					   					</div>
					   				</div>
					   				<div class="form-row">
					   					<label for="#campoFoto">Fotos</label>
					   						<input type="file" name="foto" id="campoFoto" class="form-control">
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
				</div>
			</div>
		</div>
		</form>
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