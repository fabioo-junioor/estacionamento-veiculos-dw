<?php

include('conexao.php');

$comando = "INSERT into `pessoa` (nome,cpf,telefone,num_apart) VALUES ( '{$_POST['nome']}' , '{$_POST['cpf']}', '{$_POST['telefone']}', '{$_POST['apart']}');";

mysqli_query($conexao, $comando);
header('Location: ..\index.php'); 
exit();

?>