<?php

include 'conection.php';

header('Content-Type: text/html; charset=utf-8');


// Consulta que pega todos os produtos e o nome da categoria de cada um
$sql = "SELECT p.*, c.'nome' AS categoria FROM 'produtos' AS p INNER JOIN 'categorias' AS c ON p.'categoria_id' = c.'id' ORDER BY p.'nome' ASC";
$query =  mysql_query($sql) or die(mysql_error());;

while ($produto = mysql_fetch_assoc($query)) {
  // Aqui temos o array $produto com todos os dados encontrados
  echo 'Titulo: ' . $produto['nome'] . '<br>';
  echo 'Preço: ' . $produto['preco'] . '<br>';
  echo 'Categoria: ' . $produto['categoria']. '<br>';
  echo '<hr />';
}

?>