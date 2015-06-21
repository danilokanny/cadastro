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
   $("#phone").mask("(999) 99999-9999");
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
<form method="post" action="cadastrar.php">
  <div class="row">
        <div class="input-field col s12">
          <input id="pai" name="pai" type="text" class="validate">
          <label for="pai">Nome do Pai</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="mae" name="mae" type="text" class="validate">
          <label for="mae">Nome da Mãe</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="filho1" name="filho1" type="text" class="validate">
          <label for="filho1">Nome do Filho 1</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="filho2" name="filho2" type="text" class="validate">
          <label for="filho2">Nome do Filho 2</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="renda" name="renda" type="text" class="validate">
          <label for="renda">Renda Mensal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cidade" name="cidade" type="text" class="validate">
          <label for="cidade">Cidade</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="rua" name="rua" type="text" class="validate">
          <label for="rua">Rua</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="bairro" name="bairro" type="text" class="validate">
          <label for="bairro">Bairro: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="phone" name="phone" type="text"  class="validate">
          <label for="phone">Telefone:</label>
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