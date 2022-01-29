<?php

include('../conexao.php');

#verifica se tem registro na placa
$verification = mysqli_query($conexao,"SELECT * FROM `registro`
where `registro`.cod_veiculo = '{$_POST['codigo_veiculo']}'");
$verification = $verification->fetch_assoc();

#caso não haja retorna ao index
if($verification['codigo_registro'] == FALSE){
  header('Location: ..\..\..\index.php');
  exit();
}

?>
<!DOCTYPE html>
<html lang="pt-br">


<style>
    *{
        font-family: sans-serif;
    }

    table{
        background-color: #fefefe;
        border-radius: 5px;
        border: 1px solid #ccc;
        text-align: center;
        width: 95%;
    }

    tabled td, table th{
        border: 1px solid #ccc;
    }

    tabled th{
        font-weight: bold;
        background-color: #eee;
        padding: 10px;
    }

</style>


<h2>Relatório de Entrada e Saída</h2>
<table>
    <thead>
        <tr>
            <th>Placa</th>
            <th>Entrada</th>
            <th>Saída</th>
        </tr>
    </thead>
    <tbody>
        <?php
            #Obtendo informações do Banco
            $result = mysqli_query($conexao,"SELECT * FROM `registro`, `ve??culo`
            where `ve??culo`.codigo_veiculo = '{$_POST['codigo_veiculo']}' and `ve??culo`.codigo_veiculo = registro.cod_veiculo 
            order by registro.codigo_registro desc;");
            #andando pelas informações referentes ao PDF
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['placa'];?></td>
            <td><?php echo $row['data_chegada'];?></td>
            <td><?php echo $row['data_saida'];?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
</html>