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
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/cadastro-pessoas.css" />
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
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="corpo">
    <div class="container-fluid">

      <div>
        <h4>FORMULÁRIO DE CADASTRO DE PESSOA!</h4>
      </div>

      <div class="listar-pessoas">
        <!-- Button IMPRIMIR REGISTRO DE CADASTRO-->
        <div class="registro_pessoas">
          <button id="reg2" type="button" class="btn btn-secondary">Registro</button>
        </div>
        <!-- Button trigger modal LISTAR PESSOAS-->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Pessoas
          Cadastradas</button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lista de Pessoas Cadastrados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="tabela_registros">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#Nome</th>
                        <th scope="col">#Telefone</th>
                        <th scope="col">#Apartamento</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                          $result = mysqli_query($conexao,"SELECT * FROM `pessoa`;");
                          while ($row = $result->fetch_assoc()) {
                        ?>
                        <td>
                          <?php echo $row['nome'];?>
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
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cad-pessoa"> 
        <form id="formulario" name="formulario" action="php/save_pessoa.php" method="POST">
          <div>
            <label for="" class="form-label">Informe seu nome:</label>
            <input type="text" id="nome" placeholder="Nome" name="nome" class="form-control">
          </div>
          <div>
            <label for="" class="form-label">Informe seu CPF:</label>
            <input type="number" id="cpf" placeholder="CPF" name="cpf" class="form-control">
          </div>
          <div>
            <label for="" class="form-label">Informe seu telefone:</label>
            <input type="tel" id="telefone" placeholder="Telefone" name="telefone" class="form-control">
          </div>
          <div>
            <label for="" class="form-label">Informe o numero do apartamento:</label>
            <input type="number" id="num_apart" placeholder="Numero do Apartamento" name="apart" class="form-control">
          </div>
          <div>
            <button id="enviar" type="submit" class="btn btn-outline-secondary">Enviar</button>
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
  <script src="js/validacao-cad-pessoa.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
