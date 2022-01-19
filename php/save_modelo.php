<?php

include('conexao.php');

$comando = "INSERT into `modelo` (cor,modelo,tipo,marca) VALUES ( '{$_POST['cor']}' , '{$_POST['modelo']}', '{$_POST['tipo']}', '{$_POST['marca']}');";

mysqli_query($conexao, $comando);
header('Location: ..\index.php'); 
exit();


?>