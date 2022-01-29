<?php

include('../conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
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
  border: solid 2px;
  text-align: center;
  
}
</style>
<body>
<div class="ultimos-registros">
        <h4>RELATÓRIO DO MORADOR!</h4>
          <div class="tabela_registros">
            <table class="table table-bordered border ">
                <thead>
                  <tr>
                    <th scope="col">#NOME</th>
                    <th scope="col">#CPF</th>
                    <th scope="col">#TELEFONE</th>
                    <th scope="col">#APARTAMENTPO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                        #Obtendo informações do Banco
                        $result = mysqli_query($conexao,"SELECT * FROM `pessoa` WHERE codigo_pessoa = '{$_POST['codigo_pessoa']}';");
                        #andando pelas informações referentes ao PDF
                        while ($row = $result->fetch_assoc()) {
                        ?>
                        <td>
                          <?php echo $row['nome'];?>
                        </td>
                        <td>
                          <?php echo $row['cpf'];?>
                        </td>
                        <td>
                          <?php echo $row['telefone'] ;?>
                        </td>
                        <td>
                          <?php echo $row['num_apart'] ;?>
                        </td>
                      </tr>
                        <?php } ?>
                </tbody>
            </table>
          </div>        
      </div>

      <div class="ultimos-registros">
        <br/><br/>
        <h4>RELATÓRIO DOS VEÍCULOS REFERENTES!</h4>
          <div class="tabela_registros">
            <table class="table table-bordered border ">
                <thead>
                  <tr>
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
                      where `pessoa`.codigo_pessoa = `ve??culo`.cod_pessoa and `modelo`.codigo_modelo = `ve??culo`.cod_modelo and `pessoa`.codigo_pessoa = '{$_POST['codigo_pessoa']}';");
                      while ($row = $result->fetch_assoc()) {
                    ?>
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
</html>