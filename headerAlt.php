<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
        <a class="navbar-brand" href="../../index.php">Espaço 10</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" id="home-bttn">
                    <a class="nav-link" href="../../index.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" id="sobre-bttn" href="../sobre.php">Sobre a cidade </a>
                </li>
                 <?php if (isset($_SESSION['idCliente'])){?>
                <li class="nav-item">
                    
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
                            <a class="nav-link" href="../logoff.php">Sair</a>
                        </li>
                    <div class="row" id="adminspan">
                    <div class="col">
                        <div class="badge badge-pill badge-light text-center text-primary navbar-text nomeC" id="mensagemLog">
                            <a class="nav-link text-primary" href="perfil/index.php">Perfil</a>
                        </div>
                    </div>
                    </div>
                    <?php }else{ ?>
                    <li class="nav-item" id="cadastro-bttn">
                        <a class="nav-link" href="../cadastro/cadastrar.php">Cadastre-se </a>
                     </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                 Login
                            </button>
                            <form class="dropdown-menu"
                              style="margin-left: 30%; padding: 10px"
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
</header>