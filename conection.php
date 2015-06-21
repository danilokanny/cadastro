<?php 
// CONFIGURAÇÕES DO BANCO DE DADOS 
$host = '127.0.0.1';
$user = 'root';
$pass = 'vertrigo';
$banco = 'doacao';

// Estabelecendo a conexão com o banco de dados
$connextion = mysql_connect($host, $user, $pass, $banco) or die ('Não foi possível conectar ao banco de dados: '.mysql_error());
mysql_select_db('doacao');



?>