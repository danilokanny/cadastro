<?php

header('Content-Type: text/html; charset=utf-8');

include "conection.php";

$consulta = "SELECT * FROM familia,responsavel,doacao";
$query = mysql_query($consulta);

?>

<table border="1">
	<tr>
		<td> ID Familia</td>
		<td> Nome do Responsavel</td>
		<td> Data do Proximo Recebimento</td>
	</tr>

<?php

while ($resultado = mysql_fetch_object($query)) {

if (id_familia == id_doacao){
	echo "<tr>";	
	echo "<td>".$resultado->id_familia."</td>";
	echo "<td>".$resultado-> nome."</td>";
	echo "<td>".$resultado->prox_recebimento."</td>";
	echo "</tr>";

}else {

	echo "cadastre alguem primeiro";	
};

}

?>
</table>
