<?php 
include 'conection.php';

$categoria_id=$_POST['categoria_id'];
$nome=$_POST['nome'];
$preco=$_POST['preco'];



	$query = "INSERT INTO produtos (categoria_id,nome,preco)
				VALUES ('$categoria_id','$nome','$preco')";

				if ( $result = mysql_query($query) )
					echo "Cadastrou";

				return "index.php";
				
				else
					echo "DEU MERDA";
?>