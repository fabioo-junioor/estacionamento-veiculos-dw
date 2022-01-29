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

<head>
  <title>Estacionamento de Veiculos</title>
</head>
<style>
  .ultimos-registros, .tabela_registros{
    width: 80%;
    height: auto;

  }
  .ultimos-registros .tabela_registros table{
    border: 1px solid black;
    color: black;
    width: 80%;
    table-layout: auto;
    margin: 20px auto;
    
  }
  .fixed{
    table-layout: fixed;

  }
  .ultimos-registros .tabela_registros table, td, th{
      border-collapse: collapse;
      
  }
  .ultimos-registros .tabela_registros td, th{
    padding: 10px;
    border: solid 2px;
    text-align: center;

  }
</style>
<body>
<div class="ultimos-registros">
        <h4>RELATÓRIO	DAS ENTRADAS!</h4>
          <div class="tabela_registros">
            <table class="table table-bordered border">
                <thead>
                  <tr>
                    <th scope="col">#Entrada</th>
                    <th scope="col">#Saida</th>
                    <th scope="col">#Placa</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    #Obtendo informações do Banco
                    $result = mysqli_query($conexao,"SELECT * FROM `registro`, `ve??culo`
                    where `ve??culo`.codigo_veiculo = '{$_POST['codigo_veiculo']}' and `ve??culo`.codigo_veiculo = registro.cod_veiculo 
                    order by registro.codigo_registro desc;");
                    #andando pelas informações referentes ao PDF
                    while ($row = $result->fetch_assoc()) {
                    ?>
                    <td>
                      <?php echo $row['data_chegada'];?>
                    </td>
                    <td>
                      <?php echo $row['data_saida'] ;?>
                    </td>
                    <td>
                     <?php echo $row['placa'] ;?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot><tr></tr></tfoot>
            </table>
          </div>        
      </div>

</body>
</html>