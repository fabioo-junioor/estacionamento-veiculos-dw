<?php

include('../conexao.php');

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
        background-color: #a0a0a0;

    }

    tabled th{
        font-weight: bold;
        background-color: #eee;
        padding: 10px;

    }
    tbody td{
        border: 1px solid #c3c3c3;
        padding: 10px;
        color: #000000;
        
    }

</style>


<h2>Informações do Veículo</h2>
<table>
    <thead>
        <tr>
            <th>Proprietário</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Cor</th>
        </tr>
    </thead>
    <tbody>
        <?php
            #Obtendo informações do Banco
            $result = mysqli_query($conexao,"SELECT * FROM `pessoa`, `ve??culo`, `modelo`
            where `pessoa`.codigo_pessoa = `ve??culo`.cod_pessoa and `modelo`.codigo_modelo = `ve??culo`.cod_modelo and `ve??culo`.codigo_veiculo = '{$_POST['codigo_veiculo']}';");
            #andando pelas informações referentes ao PDF
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['nome'];?></td>
            <td><?php echo $row['placa'];?></td>
            <td><?php echo $row['modelo'];?></td>
            <td><?php echo $row['marca'];?></td>
            <td><?php echo $row['tipo'];?></td>
            <td><?php echo $row['cor'];?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
</html>