<?php require_once('session_index.php');?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Sobre</title>
		<link rel="stylesheet" href="src/estilo.css">
		
		<?php require('complementos/bootstrapcdn.html') ?>
		 <script>
    $( document ).ready(function() {
        $('#sobre-bttn').addClass('active');
    });
    </script>
		<link rel="stylesheet" type="text/css" href="src/jquery.parallaxer.css">
		<style>
		    html{
		        font-family: verdana;
		    }
		</style>
	</head>
	<body>
		    <?php include('headerAlt.php');?>

		<div class="container-fluid">
		<div class="row">
		    <div class="jumbotron col-12 col-md-8 offset-md-2 " style="background: transparent;" >
			<h3 class=" text-center"  >
				<span class="titleB" style="clear:both;">
					Venha Conhecer!

				</span>
				<hr>
			</h3>
		</div>
			<div class="col-12 col-sm-8 offset-sm-2" style="margin-top: 5em;">
				<div class="font-weight-light text-justify">
					<p><span class="display-4">C</span>aldas Novas é um município brasileiro do estado de Goiás. De acordo com estimativas de 2016, do Instituto Brasileiro de Geografia e Estatística, sua população é de 84 900 habitantes. Segundo o Tribunal Regional Eleitoral de Goiás, em junho de 2011 registram-se em Caldas Novas 48.242 eleitores ou 1,19% do eleitorado de Goiás.
					O município é conhecido por ser a <span class="font-weight-bold">maior estância hidrotermal do mundo</span>, possuindo águas que brotam do chão em temperaturas que variam de 43° a 70°. A principal fonte de renda do município é o turismo. Na alta temporada, a cidade chega a comportar mais de 500 mil turistas.</p>
				</div>
				</div>
				<div class="parallaxer">
					<img src="images/image.jpg">
				</div>	
			</div>
			<div class="row">
				<div class="col-12 col-sm-8 offset-sm-2"  style="margin-top: 3%">
					<h6 class="titleMenu text-center" style="color: black">Atrações Turísticas:</h6>
					<hr>
				</div>

			</div>
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-4">
					<div class="font-weight-light text-center">
						<div class="shadow-lg  p-3 mb-5 ">
							<div class="card card-s border-light">
				    			<img class="card-img-top" height="400px" src="images/parque.jpg" alt="Card image">
				    			<div class="card-body">
				      				<p class="card-text text-justify"><span class="display-4" >P</span>arque Estadual da Serra de Caldas Novas - apresenta ao turista várias fontes que se transformam em riachos em meio a uma vegetação exuberante. Foi criado com o objetivo de proteger a área de captação da chuva que abastece o lençol termal. Tem a visitação dos turistas controlados a fim de que o Parque continue sendo um preservador do cerrado goiano e do manancial hidrotermal. Além das trilhas e cachoeiras que o Parque possui, os amantes da natureza ainda podem praticar ciclismo (mountain bike), pois a região é cercada de trilhas com paisagens deslumbrantes. O esporte cresceu tanto na cidade que, anualmente, é realizado uma competição que atrai atletas de todo o país, o Desafio das Águas Quentes de Mountain Bike.</p>
	    						</div>
	  						</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4" >	
					<div class="shadow-lg p-3 mb-5 ">
						<div class="font-weight-light text-center">
							<div class="card card-s border-light">
				    			<img class="card-img-top" height="400px" src="images/clube.jpg" alt="Card image">
				    			<div class="card-body">
				      				<p class="card-text text-justify"><span class="display-4" >S</span>ão os maiores atrativos turísticos da cidade. Atraem muitos movimento a cidade em busca de lazer e diversão nas águas quentes. Os parques aquáticos tem estrutura completa para toda família e todas as idades. Toboágua tipo radical e para crianças, rio lento, atrações com bóias, piscinas termais, de ondas, ôfuro, bar molhado, sauna, recreação com monitores e shows musicais. DiRoma Thermas, Clube Privé, CTC, Náutico Praia Clube, Lagoa Termas e outros. Podem ser anexos de hotéis ou clubes, e visitados pelos turistas. Há também condomínios espalhados pela cidade que possuem piscinas termais, toboáguas, saunas e outros atrativos, em menor estrutura.</p>
	    						</div>
	  						</div>
	  					</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-4" >	
					<div class="shadow-lg p-3 mb-5 ">
						<div class="font-weight-light text-center">
							<div class="card card-s border-light">
				    			<img class="card-img-top" height="400px" src="images/igreja.jpg" alt="Card image">
				    			<div class="card-body">
				      				<p class="card-text text-justify"><span class="display-4" >A</span>lém de várias estâncias termais, Caldas Novas possui na praça central Mestre Orlando, a Igreja Matriz, um calçadão repleto de bares e restaurantes e um chafariz, lugares mais frequentados pelos turistas, além da sede da Secretaria do Turismo, onde se pode obter informações sobre lugares a serem explorados. Na mesma praça, existe a Igreja Nossa Senhora das Dores, construída em 1850. É a construção mais antiga da cidade.</p>
	    						</div>
	  						</div>
	  					</div>
					</div>
				</div>				
			</div>
		</div>
		<footer class="bg-dark font-weight-light text-center">
			<small style="color: white">  Entre em contato e faça sua reserva! <br> Tel: 99999-9999 | Email: contato@espaco10.com <br>Made by: @lucas.FB <br></small>
		</footer>
		<script type="text/javascript" src="src/jquery.parallaxer.js"></script>
		<script type="text/javascript">
			(function ($) {
				"use strict";

				$(function () {
					$(".parallaxer").parallaxer();
				});
			}(jQuery));

		</script>
	</body>
</html>