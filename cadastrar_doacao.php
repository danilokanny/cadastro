<?php
include 'conection.php';
function dataAmericana($i){
$tmp = explode("/",$i);
return $tmp[2].'-'.$tmp[1].'-'.$tmp[0]; 
}
if (!isset($_POST['data_recebimento'])) {$_POST['data_recebimento']='';}
if (!isset($_POST['descricao'])) {$_POST['descricao']='';}
if (!isset($_POST['quantidade'])) {$_POST['quantidade']='';}
if (!isset($_POST['prox_recebimento'])) {$_POST['prox_recebimento']='';}
if ($_POST['data_recebimento']!=='' ||   $_POST['descricao']!=='' ||   $_POST['quantidade']!=='' || $_POST['prox_recebimento']!=='' ) {
		$data_recebimento=dataAmericana($_POST['data_recebimento']);
		$descricao =$_POST['descricao']; 
		$quantidade =$_POST['quantidade']; 
		$prox_recebimento=dataAmericana($_POST['prox_recebimento']);
$doacao = "INSERT INTO doacao (data_recebimento,descricao,quantidade,prox_recebimento)
				VALUES ('$data_recebimento','$descricao','$quantidade','$prox_recebimento')";
	mysql_query($doacao) or die(mysql_error());
} else {
echo "algum campo esta em branco verifique";
}

?>