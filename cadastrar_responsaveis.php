<?php 
include 'conection.php';


$nome=$_POST['nome'];
$tipo=$_POST['tipo'];


echo $tipo;
echo $nome;

	$query = "INSERT INTO responsavel (nome,tipo)
				VALUES ('$nome','$tipo')";

				if ( $result = mysql_query($query) )
					echo "Cadastrou";
				else
					echo "DEU MERDA";
?>