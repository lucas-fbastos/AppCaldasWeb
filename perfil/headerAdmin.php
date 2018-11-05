
<nav class="navbar navbar-expand-lg navbar-primary bg-primary " style='border: 0px;'>
      <div class="container">
        <a class="navbar-brand text-light" href="../../index.php">Espaço 10</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style='background-color: rgba(255,255,255,0.5);' id='btnNav'>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item " id="home-bttn" >
                    <a class="nav-link" href="../../index.php" style='color: rgb(255,255,255); opacity: 0.9'>Home</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" id="sobre-bttn" href="../sobre.php" style='color: rgb(255,255,255); opacity: 0.9'>Sobre a cidade </a>
                </li>
                 
                    <?php if (isset($_SESSION['admin'])){?>
                        <li class="nav-item">
                            <a class="nav-link" href="../logoff.php" style='color: rgb(255,255,255); opacity: 0.9'>Sair</a>
                        </li>
                    <div class="row" id="adminspan">
                    <div class="col">
                        <div class="badge badge-pill badge-light text-center text-primary navbar-text nomeC" id="mensagemLog">
                            <a class="nav-link text-primary" href="../perfil/index.php" >Perfil</a>
                        </div>
                    </div>
                    </div>
                    <?php }else{ 
                    
                    header('location:../index.php');
                    die();
                     } ?>
            </div>
            </div>
            </nav>
