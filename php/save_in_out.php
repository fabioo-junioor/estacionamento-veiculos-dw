<?php

include('conexao.php');

$result = mysqli_query($conexao,"SELECT codigo_registro FROM `registro` where cod_veiculo = '{$_POST['codigo_veiculo']}' and data_saida = '0000-00-00';");
$result = $result->fetch_assoc();

if($_POST['entrada_saida']==1 && $result == FALSE){

    $comando = "INSERT into `registro` (data_chegada,cod_veiculo) VALUES (now() , '{$codigo['codigo_veiculo']}' );";

    mysqli_query($conexao,$comando) or die ('Erro no cadastro!');

}else if($_POST['entrada_saida']==2 && $result == TRUE){

    $comando = "UPDATE `registro` set data_saida = now() where codigo_registro = '{$result['codigo_registro']}'";
    
    mysqli_query($conexao,$comando);

}

header('Location: ..\index.php');
exit();

?>