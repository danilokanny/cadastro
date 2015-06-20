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
  <title>Cadastro de Categoria</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="cadastro_produto.php">Cadastro de produto</a></li>
        <li><a href="cadastro_categorias.php">Cadastro das categorias</a></li>
         <li><a href="vizualizar.php">visualizar</a></li>
      </ul>
    </div>
  </nav>
<form method="post" action="cadastrar.php">
  <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome" type="text" class="validate">
          <label for="nome">Nome da categoria</label>
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