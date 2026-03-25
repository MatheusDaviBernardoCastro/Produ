<?php
/*Variaveis de Conexão com mysql*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_produtos";

$conexao = mysql_connect("$servidor, $usuario, $senha, $banco");

if (!$conexao){
    die("Erro de Conexão: " mysqli_connect_error());
}
?>