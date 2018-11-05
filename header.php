
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style='background-color: transparent; border: 0px'>
      <div class="container">
        <a class="navbar-brand" href="../../index.php">Espaço 10</a>
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
                 <?php if (isset($_SESSION['idCliente'])){?>
                <li class="nav-item " style='color: rgb(255,255,255); opacity: 0.9'>
                    <a class="nav-link" href="../logoff.php">Sair</a>
                </li>
                </ul>
                    <div class="row" id="logSpan">
                        <div class="col">
                            <div class="badge badge-pill badge-light text-center text-primary navbar-text nomeC" id="mensagemLog">
                                <font size="4">
                                    Bem vindo <?= ' ' . $cliente->nome;?>
                                </font>
                            </div>
                        </div>
                    </div>
                    <?php }elseif (isset($_SESSION['admin'])){?>
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
                    <?php }else{ ?>
                    <li class="nav-item" id="cadastro-bttn">
                        <a class="nav-link" href="../cadastro/cadastrar.php" style='color: rgb(255,255,255); opacity: 0.9'>Cadastre-se </a>
                     </li>
                        <li class="nav-item">
                            <div class="dropdown">
                            <button type="button" class="btn  dropdown-toggle dropform " data-toggle="dropdown" style="background-color: transparent; border: 0px solid transparent; color: rgb(255,255,255); opacity: 0.9">
                                 Login
                            </button>
                            <div class="dropdown-menu" style="width: 200px;">
                            
                            <form 
                              style ='padding: 5px'
                              method="POST"
                              action="../login/pLogin.php">
                            <div class="form-group">
                                <label for="login">Login</label>
                                    <input type="text" required class="form-control" id="login" name="login">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" required class="form-control" id="senha" name="senha">
                                </div>
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </form>
                            </div>
                </li>

            </ul>
            <?php } ?>
            <?php if (isset($_GET['m'])) { ?>
                <div class="row" id="errorSpan">
                    <div class="col">
                        <div class="badge badge-pill badge-light text-center text-danger" id="mensagem">
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
            </nav>
