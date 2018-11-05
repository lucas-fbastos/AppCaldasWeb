<?php
        require_once('../session_index.php');
        require("../complementos/bootstrapcdn.html"); 
?>
<html>
<head>
  <title>Cadastro</title>
  <link rel="stylesheet" type="text/css" href="../src/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
 <style type="text/css">
  .border{
    padding: 10px;
  } 
  .botaoForm{
    margin-top: 10px;
  }
  .g-recaptcha{
    margin-top: 15px;
    margin-left: 55px;
  }
    html{
      margin-bottom: 0px;
    }
     button{
    width: 120px;
  }
  .vertical{
    margin-top: 15px;
  }
  </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function () {
        var $cpf = $("#campoCpf");
        $cpf.mask('000.000.000-00', {reverse: false});
        var $telefone = $("#campoTelefone");
        $telefone.mask('0 0000-0000', {reverse: false});
        var $ddd = $("#ddd");
        $ddd.mask('(00)', {reverse:false});
        var $cep = $("#campoCep");
        var $numero = $('#campoNumero');
        $numero.mask('000000', {reverse:false});
        $cep.mask('00000-000', {reverse:false});
        $("#campoNumero").attr('maxlength','6');
        $("#campoSenha").attr('maxlength','30');
        $('#campoConfirma').attr('maxlength','30');
        $('#cadastro-bttn').addClass('active');
    });
    
    </script>
</head>
<body>
      <?php include('../headerAlt.php');?>

    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-8 offset-md-2">
        <h1 class="titleM text-center" style="color: black">Cadastre-se abaixo</h1>
      <form  class="shadow-lg p-3 mb-5" method="POST" action="pCadastrar.php">
        <div class="border border-info">
        <div class="row">
          <div class="col">
            <label for="#campoNome" class="text" >Nome</label>
            <input id="campoNome" type="text" name="nome" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="#campoRG" class="text">RG</label>
            <input id="campoRG" type="text" name="rg" class="form-control" required="">
          </div>
          <div class="col">
            <label for="#campoCpf" class="text">CPF</label>
            <input id="campoCpf" type="text" name="cpf" class="form-control" required="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="#campoEmail">E-mail</label>
            <input id="campoEmail" type="email" name="email" class="form-control" required="">
          </div>
        </div>
        <div class="row">
          <div class="col col-12">
            <label for="#campoSenha">Senha</label>
            <input id="campoSenha" type="password" name="senha" class="form-control" required=""> 
          </div>
          </div>
          <div class="row">
          <div class="col col-12"> 
            <label for="#campoConfirma">Confirme sua senha</label>
            <input type="password" name="cSenha" id="campoConfirma" class="form-control" required="">
          </div>
        </div>
        <div class="row">
          <div class="col col-4">
            <label for="#ddd">DDD</label>
            <input type="text" name="ddd" id="ddd" class="form-control" required="">
          </div>
          <div class="col col-8">
            <label for="#campoTelefone">Telefone Celular</label>
            <input type="text" name="telefone" id="campoTelefone" class="form-control" required="">
          </div>
        </div>
        <div class="row">
          <div class="col col-12">
            <label for="#estados">UF</label>
            <select name="uf" id="#estados" class="custom-select" required="">
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
          </div>
          <div class="col col-12">
            <label for="#campoCidade">Cidade</label>
            <input type="text" name="cidade" id="campoCidade" class="form-control" required="">
          </div>
         
        </div>
        <div class="row">
          <div class="col col-8">
            <label for="#campoEndereco">Endereço</label>
              <input type="text" name="endereco" id="campoEndereco" class="form-control" required="">
          </div>
          <div class="col col-4">
            <label for="#campoNumero">Numero</label>
            <input type="text" required="" name="numero"  id="campoNumero" class="form-control">
          </div>
           <div class="col col-6">
            <label for="#campoCep">CEP</label>
            <input type="text" name="cep" class="form-control" required="" id="campoCep">
          </div>
          <div class="col">
            <label for="#campoComplemento">Complemento</label>
            <input type="text" name="complemento" id="campoComplemento" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="g-recaptcha" style="margin-left: -10px" data-sitekey="6LdUXmwUAAAAAHtjJ4MILCi6QD_zxx0UvnR_QeCk"></div>
          </div>
          <div class="col">
            <button  id="" type="submit" class="btn btn-primary btn-block botaoForm">
              Enviar
            </button>
            <button  id="botaoForm" type="reset" class=" botaoForm btn btn-secondary btn-block">
              Limpar
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col text-center text-danger" id="mensagem" style="font-size: 10px" >
            <?php if(isset($_GET['m'])){
              echo $_GET['m'];
              $_GET['m'] = "";
            } ?>
          </div>
        </div>
        </div>
      </form> 
    </div>
  </div>
</div>
<footer class="bg-dark font-weight-light text-center">
      <small style="color: white">  Entre em contato e faça sua reserva! <br> Tel: 99999-9999 | Email: contato@espaco10.com <br>Made by: @lucas.FB <br></small>
    </footer> 
</body>
</html>
