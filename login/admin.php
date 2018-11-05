<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="../src/estilo.css">
	<?php require("../complementos/bootstrapcdn.html"); ?>
</head>
<body>
<body >
	<main class="container-fluid">
		<div class="row" style="margin-top:50px;">
			<div class="col-8 col-sm-8 col-md-6 offset-md-3 offset-2 offset-sm-2 bg-light shadow-lg p-3 mb-5 border border-primary rounded">
				<p class="text-center titleMenu" style="color: black">Login</p>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-8 col-sm-8 col-md-6 offset-md-3 offset-2 offset-sm-2 bg-light shadow-lg p-3 mb-5 border border-primary rounded">
				<form method="post" action="adminLoginP.php">
				<label for="login" class=" titleP">Usuário:</label>
				<div class="input-group">
        			<div class="input-group-prepend">
          				<div class="input-group-text">@</div>
        			</div>
        			<input type="text" class="form-control" id="login" name="login" placeholder="Digite seu usuário aqui">
      			</div>
	      			<label for="senha" class=" titleP">Senha:</label>
					<div class="input-group">
	        			<div class="input-group-prepend">
	          				<div class="input-group-text">***</div>
	        			</div>
	        			<input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha aqui">
	      			</div>
	      			<div>
	      				<button type="submit"  class="btn btn-block btn-primary" style="margin-top: 10px;">Entrar</button>
	      		</form>

	      				<a href="../index.php" class="btn btn-block btn-secondary" style="margin-top: 10px;">Voltar</button></a>
	      				  <?php if(isset($_GET['m'])){ ?>
			           	 	<div class="row" id="errorSpan">
					        	<div class="col">
						       		<div class="badge badge-pill badge-light text-center text-danger" id="mensagem" >
						        		<font size="4">
								    		<?php
						              			echo $_GET['m'];
							             	 	$_GET['m'] = "";
							           		 ?>
					        			</font>
					    			</div>
								</div>
							</div>
						<?php } ?>
	      			</div>
      			
			</div>
		</div>
	</main>
</body>
</html>