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
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/cadastro-veiculos.css" />
  <link rel="stylesheet" href="css/tabela-registro.css" />
  <title>Estacionamento de Veiculos</title>
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
      <div>
        <h4>FORMULÁRIO DE CADASTRO DE VEICULOS!</h4>
      </div>

      <div class="button-modais">        
        <div class="space_button">
        <!-- Button IMPRIMIR REGISTRO DE CADASTRO-->
          <div class="registro_veiculos">
            <button id="reg3" type="button" class="btn btn-secondary">Registro</button>
          </div>
        </div>

        <div class="space_button">
          <div class="listar-veiculos">
            <!-- INSERIR modal para listar os veiculos ja cadastradas-->
            <!-- Button trigger modal LISTAR VEICULOS-->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop1">Veiculos Cadastrados</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel1">Lista de Veiculos Cadastrados</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="tabela_registros">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#Placa</th>
                            <th scope="col">#Proprietário</th>
                            <!--
                              <th scope="col">Codigo Modelo</th>
                            -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php
                              $result = mysqli_query($conexao,"SELECT * FROM `pessoa`, `ve??culo`
                                  where `ve??culo`.cod_pessoa = pessoa.codigo_pessoa;");
                              while ($row = $result->fetch_assoc()) {
                            ?>
                            <td>
                              <?php echo $row['placa'];?>
                            </td>
                            <td>
                              <?php echo $row['nome'] ;?>
                            </td>
                            <!--
                            <td>
                              <?php echo $row['cod_modelo'] ;?>
                            </td>
                            -->
                          </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="cad-modelo">
            <!-- Button trigger modal CADASTRAR MODELO-->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop2">Cadastrar Modelo</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel2">Formulário de Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="formulario" name="formulario" action="php/save_modelo.php" method="POST">
                      <label for="" class="form-label">Informe a Marca:</label>
                      <input type="text" id="marca" placeholder="Marca" name="marca" class="form-control">
                      <label for="" class="form-label">Informe o Modelo:</label>
                      <input type="text" id="modelo" placeholder="Modelo" name="modelo" class="form-control">
                      <label for="" class="form-label">Informe a Cor:</label>
                      <input type="text" id="cor" placeholder="Cor" name="cor" class="form-control">
                      <label for="" class="form-label">Informe o Tipo "Sedan/Hatch":</label>
                      <select class="form-select" id="modelo_veiculo_modal" name="tipo" aria-label="Default select example">
                        <option selected value="0">Escolha uma Opção</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Hatch">Hatch</option>
                        <option value="Motocicleta">Motocicleta</option>
                      </select>
                      <button id="enviar_modelo" type="submit" class="btn btn-outline-secondary">Enviar</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
      <div class="cad-veiculo">
        <form id="formulario2" name="formulario2" action="php/save_veiculo.php" method="POST">
          <div>
            <label for="" class="form-label">Informe a placa do veiculo:</label>
            <input type="text" id="placa" placeholder="Placa" name="placa" class="form-control">
          </div>
          <div>
            <label for="" class="form-label">Modelo do veiculo:</label>
            <select class="form-select" id="modelo_veiculo" name="modelo" aria-label="Default select example">
              <option selected value="0">Escolha uma Opção</option>
              "qwe{$a}rty"
              <?php
              $result = mysqli_query($conexao,"SELECT * FROM `modelo`;");
              while ($row = $result->fetch_assoc()) {
                ?><option value="<?php echo $row['codigo_modelo'];?>"><?php echo "{$row['marca']} || {$row['modelo']} || {$row['tipo']} || {$row['cor']}";?></option><?php
              }
              ?>

            </select>
          </div>
          <div>
            <label for="" class="form-label">Nome do Proprietário do Veiculo:</label>
            <select class="form-select" id="proprietario_veiculo" name="pessoa" aria-label="Default select example">
              <option selected value="0">Escolha uma Opção</option>

              <?php
              $result = mysqli_query($conexao,"SELECT codigo_pessoa,nome FROM `pessoa`;");
              while ($row = $result->fetch_assoc()) {
                ?><option value="<?php echo $row['codigo_pessoa'];?>"><?php echo $row['nome'];?></option><?php
              }
              ?>

            </select>
          </div>
          <div>
            <button id="enviar_veiculo" type="submit" class="btn btn-outline-secondary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
    
  </section>
  <footer class="rodape">
    <div class="container-fluid">
      <p> Copyright © 2021 </p>
    </div>
  </footer>
  <script src="js/validacao-cad-veiculo.js"></script>
  <script src="js/validacao-cad-modelo-veiculo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>