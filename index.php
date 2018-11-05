<?php require_once('session_index.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="src/estilo.css">
    <link rel="stylesheet" href="src/estiloH.css">
    <?php require("complementos/bootstrapcdn.html"); ?>
    
    
</head>
<body class='fundo'>
   <?php include('header.php')?>
    <!-- Page Header -->
    <header class="masthead imageNav" id='imagemNav' style="background-image: url('images/bg.jpg'); max-height:300px">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 class='titleX' >Espaço 10</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

</div>
<!-- carrousel -->
<div style="margin-top: 40px;" class="container-fluid">
    <div class="row" style='width=100%'>
        <div class="col-12 col-md-12 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block rounded" height="500" width="100%" src="images/img1.jpg" alt="First slide">
                        <div class="carousel-caption ">
                            <h5 class="titleMenu font-weight-bold">Faça já sua reserva!</h5>
                            <p class="legendaMenu">Clique <a href="#">aqui</a> para fazer a reserva!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block rounded" height="500" width="100%" src="images/clube.jpg"
                             alt="Second slide">
                        <div class="carousel-caption ">
                            <h5 class="titleMenu font-weight-bold">Conheça Caldas!</h5>
                            <p class="legendaMenu">Venha conhecer os pontos turísticos!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block rounded" height="500" width="100%" src="images/image.jpg" alt="Third slide">
                        <div class="carousel-caption ">
                            <h5 class="titleMenu font-weight-bold">Cadastre-se no portal!</h5>
                            <p class="legendaMenu">Realize o <a href="cadastro/cadastrar.php">cadastro</a> e agilize sua
                                reserva!</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- fim do carrousel -->

        </div>
    </div>
    <div class="row ">
        <div class="col-10 offset-1 shadow-lg p-3 mb-5 anuncios">
            <h3 class="titleMenu text-center" style="color: black">Apartamentos</h3>
            <p class="text-center">Confira abaixo nossos apartamentos disponíveis para reserva!</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
       
        <?php for ($i = 0; $i < $tamanho; $i++) {

            ?>
            <div class="col-lg-4 col-sm-6 item" >
                <a class="linkA" href="detalheAp.php?i=<?= $aps[$i]['codigoanuncio']; ?>">
                    <div class="card  anuncioC h-100 cardSombra"  style=" border-radius: 10px ">
                        <img class="card-img-top anuncioI" src="<?=  $aps[$i]['foto1']; ?>"
                             alt="Card image cap" height="400px">
                        <div class="card-body">
                           <p class=" card-title text-primary"><?= $aps[$i]['titulo'] ?></p>
                             <p class="card-text"><?= $aps[$i]['conteudo']?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<footer class="bg-dark font-weight-light text-center container-fluid" style='padding: 10px'>
    <small style="color: white"> Entre em contato e faça sua reserva! <br> Tel: 99999-9999 | Email: contato@espaco10.com
        <br>Made by: @lucas.FB <br>
        <a href="login/admin.php">login</a></small>
</footer>
<script type="text/javascript">

    $('.cardSombra').hover(
       function(){ $(this).addClass('shadow-lg '); },
       function(){ $(this).removeClass('shadow-lg '); }
     );
    $('.cardSombra').blur(
       function(){ $(this).removeClass('shadow '); }
     );
    /* função para exibir o nome do imovel ao passar o mouse sobre (inativado por não ter muita usabilidade no mobile)
     $('.anuncioT').hide();
     $('.anuncio').mouseenter(function () {
         $('.anuncioT').show();
     });
     $('.anuncio').mouseleave(function () {
         $('.anuncioT').hide();
     });
    */
    $(document).on('click', 'body .dropdown-menu', function (e) {
        e.stopPropagation();
    });
    $('#errorSpan').click(function () {
        $(this).toggle();
    });
    $( document ).ready(function() {
        $('#home-bttn').addClass('active');
    });
    $('#btnNav').click(function(){
        $('#imagemNav').toggleClass('imageNavActive');
        
    });
</script>

</body>
</html>