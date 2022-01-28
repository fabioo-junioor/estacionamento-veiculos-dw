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
<style>
  .ultimos-registros .tabela_registros table{
    border: 1px solid black;
    color: black;
    width: 100%;
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
  border: solid 1px;
  text-align: center;

}
</style>
<body>
<div class="ultimos-registros">
        <h4>RELATÓRIO DE VEÍCULO!</h4>
          <div class="tabela_registros">
            <table class="table table-bordered border ">
                <thead>
                  <tr>
                    <th scope="col">#PROPRIETARIO</th>
                    <th scope="col">#PLACA</th>
                    <th scope="col">#MODELO</th>
                    <th scope="col">#MARCA</th>
                    <th scope="col">#TIPO</th>
                    <th scope="col">#COR</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $result = mysqli_query($conexao,"SELECT * FROM `pessoa`, `ve??culo`, `modelo`
                      where `pessoa`.codigo_pessoa = `ve??culo`.cod_pessoa and `modelo`.codigo_modelo = `ve??culo`.cod_modelo and `ve??culo`.codigo_veiculo = '{$_POST['codigo_veiculo']}';");
                      while ($row = $result->fetch_assoc()) {
                    ?>
                    <td>
                      <?php echo $row['nome'];?>
                    </td>
                    <td>
                      <?php echo $row['placa'] ;?>
                    </td>
                    <td>
                     <?php echo $row['modelo'] ;?>
                    </td>
                    <td>
                     <?php echo $row['marca'] ;?>
                    </td>
                    <td>
                     <?php echo $row['tipo'] ;?>
                    </td>
                    <td>
                     <?php echo $row['cor'] ;?>
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