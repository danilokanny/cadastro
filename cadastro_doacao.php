<?php 
include 'conection.php';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<script src="js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(function($){
    $("#data_recebimento").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});
     $("#prox_recebimento").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});
});
  </script>  
  <title>Cadastro da Familia</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="#">Home</a></li>
        <li><a href="index.php">Cadastro da Familia</a></li>
        <li><a href="cadastro_doacao.php">Cadastro das doações</a></li>
        <li><a href="cadastro_responsaveis.php">Cadastro Responsavel</a></li>
         <li><a href="vizualizar.php">visualizar</a></li>
      </ul>
    </div>
  </nav>
<form method="post" action="cadastrar_doacao.php">
       <div class="row">
        <div class="input-field col s12">
          <input id="data_recebimento" name="data_recebimento" type="text" class="validate">
          <label for="data_recebimento">Data de Recebimento: </label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="descricao" name="descricao" type="text" class="validate">
          <label for="descricao">Descricao: </label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="quantidade" name="quantidade" type="text" class="validate">
          <label for="quantidade">Quantidade: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="prox_recebimento" name="prox_recebimento" type="text"  class="validate">
          <label for="prox_recebimento"> Proximo Recebimento: </label>
        </div>
      </div>
       <center>
    <input id="botao" type="submit" value="Cadastrar" />
  </button>
  </center>
    </form>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script> 
</body>
</html>