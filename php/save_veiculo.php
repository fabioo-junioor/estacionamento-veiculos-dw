<?php

include('conexao.php');

$comando = "INSERT into `ve??culo` (placa,cod_pessoa,cod_modelo) VALUES ( '{$_POST['placa']}' , '{$_POST['pessoa']}', '{$_POST['modelo']}');";

mysqli_query($conexao, $comando);
header('Location: ..\index.php'); 
exit();


?>