<?php
header('Content-Type: text/html; charset=utf-8');

include "conection.php";

	// Seleciona os projetos
	$familia = "SELECT * FROM familia";
			//$result = mysql_query($query);
		// Executa a query
		if ($result = mysql_query($familia)) {

			// Titulo geral
		echo "<h1>Listagem das doacao</h1>";
			// Lista os projetos
			while ($row = mysql_fetch_array($result)) {
					echo "ID: ".$row['id'],"-</div>"."<br>"; }

}

			// Seleciona os projetos
				$responsavel = "SELECT * FROM responsavel";
						//$result = mysql_query($query);
					// Executa a query
					if ($result = mysql_query($responsavel)) {

						// Titulo geral
					//echo "<h1>Listagem das doacao</h1>";
						// Lista os projetos
						while ($row = mysql_fetch_array($result)) {
								echo "nome: ".$row['nome'],"-</div>"."<br>"; }

			}

		// Seleciona os campos da tabela
		$query = "SELECT * FROM doacao";
			//$result = mysql_query($query);
			// Executa a query
			if ($result = mysql_query($query)) {
					// Titulo geral
			//echo "<h1>Listagem das doacao</h1>";
				// Lista os projetos
			while ($row = mysql_fetch_array($result)) {
				echo "Proximo Recebimento: "."<td>".$row['prox_recebimento'],"-</div>"."<br>"."</td>";
			}
		} 


	
?>