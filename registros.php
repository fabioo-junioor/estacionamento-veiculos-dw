<?php
include('php/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/tabela-registro.css" />
  <link rel="stylesheet" href="css/registros.css" />
  <title>Estacionamento de Veiculos </title>
</head>
<body>
  <header class="cabecalho">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/UFSM_secundario.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro-pessoa.php">Cadastrar Pessoas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro-veiculo.php">Cadastrar Veiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registros.php">Registros</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="corpo">
    <div class="container-fluid">
      <div class="title">
        <!-- ESCHOLA DA PLACA E BUTTON PARA PDF DO RELATORIO DE ENTRADA E SAIDA DO VEICULO-->
        <h4>REGISTRO DE ENTRADAS E SA??DAS!</h4>
      </div>
      <div class="registro-placas">
        <form id="registro-placas" name="registro_placas" action="php/converts_pdf/convert_in_out.php" method="POST">
          <div>
              
            <label for="" class="form-label">Escolha a Placa do Veiculo:</label>
          </div>
          <div class="form-interno">
            <select class="form-select" id="codigo_veiculo" name="codigo_veiculo" aria-label="Default select example">
              <option selected value="0">Escolha uma Op????o</option>

              <?php
                $result = mysqli_query($conexao,"SELECT codigo_veiculo,placa FROM `ve??culo`;");
                while ($row = $result->fetch_assoc()) {
                  ?> <option value="<?php echo $row['codigo_veiculo']; ?>"><?php  echo $row['placa']; ?></option> <?php
                }
              ?>
              
            </select>

            <button id="enviar" type="submit" class="btn btn-outline-secondary">Gerar PDF</button>
          </div>
        </form>
      </div>
      
      <div class="title">
        <!-- ESCHOLA DA PESSOA E BUTTON PARA PDF DAS INFOS DA PESSOA-->
        <h4>REGISTROS DE UMA PESSOA!</h4>
      </div>
      <div class="registro_pessoa">
        <form id="registro_pessoa" name="registro_pessoa" action="php/converts_pdf/convert_pessoa.php" method="POST">
          <div>
              <label for="" class="form-label">Escolha a Pessoa:</label>
          </div>
          <div class="form-interno">
            <select class="form-select" id="codigo_pessoa" name="codigo_pessoa" aria-label="Default select example">
              <option selected value="0">Escolha uma Op????o</option>

              <?php
                $result = mysqli_query($conexao,"SELECT codigo_pessoa,nome FROM `pessoa`;");
                while ($row = $result->fetch_assoc()) {
                  ?> <option value="<?php echo $row['codigo_pessoa']; ?>"><?php  echo $row['nome']; ?></option> <?php
                }
              ?>
              
            </select>

            <button id="enviar2" type="submit" class="btn btn-outline-secondary">Gerar PDF</button>
          </div>
        </form>
      </div>

      <div class="title">
        <!-- ESCHOLA DA PLACA E BUTTON PARA PDF DAS INFOS DO VEICULO-->
        <h4>REGISTROS DE UM VE??CULO!</h4>
      </div>
      <div class="registro-veiculo">
        <form id="registro-veiculo" name="registro_veiculo" action="php/converts_pdf/convert_veiculo.php" method="POST">
          <div>
            <label for="" class="form-label">Escolha a Placa do Veiculo:</label>
          </div>
          <div class="form-interno">
            <select class="form-select" id="codigo_veiculo" name="codigo_veiculo" aria-label="Default select example">
              <option selected value="0">Escolha uma Op????o</option>

              <?php
                $result = mysqli_query($conexao,"SELECT codigo_veiculo,placa FROM `ve??culo`;");
                while ($row = $result->fetch_assoc()) {
                  ?> <option value="<?php echo $row['codigo_veiculo']; ?>"><?php  echo $row['placa']; ?></option> <?php
                }
              ?>
              
            </select>
            
            <button id="enviar3" type="submit" class="btn btn-outline-secondary">Gerar PDF</button>
          </div>
        </form>
      </div>

    </div>
  </section>
  <footer class="rodape">
    <div class="container-fluid">
      <p> Copyright ?? 2021 </p>
    </div>
  </footer>
  <script src="js/validacao-registros.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>