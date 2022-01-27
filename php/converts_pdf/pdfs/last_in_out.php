<?php

include('../conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/home.css" />
  <link rel="stylesheet" href="../css/tabela-registro.css" />
  <title>Estacionamento de Veiculos </title>
</head>

<body>
<div class="ultimos-registros">
        <h4>RELATÓRIO	DAS ENTRADAS!</h4>
          <div class="tabela_registros">
            <table class="table table-bordered border ">
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
                      $result = mysqli_query($conexao,"SELECT * FROM `registro`, `ve??culo`
                      where `ve??culo`.codigo_veiculo = '{$_POST['codigo_veiculo']}' and `ve??culo`.codigo_veiculo = registro.cod_veiculo 
                      order by registro.codigo_registro desc;");
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
            </table>
          </div>        
      </div>

</body>
<script src="../js/validacao-home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</html>