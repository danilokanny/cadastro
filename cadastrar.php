<?php

include 'conection.php';


$pai=$_POST['pai'];
$mae=$_POST['mae'];
$filho1=$_POST['filho1'];
$filho2=$_POST['filho2'];
$renda=$_POST['renda'];
$cidade=$_POST['cidade'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$phone=$_POST['phone'];

var_dump($_POST);


	$query = "INSERT INTO familia (pai,mae,filho1,filho2,renda,cidade,rua,bairro,phone)
				VALUES ('$pai','$mae','$filho1','$filho2',$renda,'$cidade','$rua','$bairro','$phone')";

				if ( $result = mysql_query($query) )
					echo "Cadastrou";
				else
					echo "DEU MERDA";

?>