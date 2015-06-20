<?php 
include 'conection.php';


$nome=$_POST['nome'];



	$query = "INSERT INTO categorias (nome)
				VALUES ('$nome')";

				if ( $result = mysql_query($query) )
					echo "Cadastrou";
				else
					echo "DEU MERDA";
?>