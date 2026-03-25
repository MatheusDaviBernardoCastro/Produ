<?php

include("conexao.php"); //incluindo o conexao
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$resultado = msqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <tittle>SYS BRAIA</tittle>
    </head>
    <body>
        <h1>Cadastro</h1>
        <form action="salvar.php" method="post">
        <label>Nome:</label>
        <input type ="text" name="nome" required>
        <label>Preco:</label>
        <input type ="number" name="preco" required>
        </form>
    </body>
</html>