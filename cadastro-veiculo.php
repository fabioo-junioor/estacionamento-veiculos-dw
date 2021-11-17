<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/cadastro-veiculo.css">
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
      <div class="cad-total">
        <h4>FORMULÁRIO DE CADASTRO DE VEICULOS!!</h4>
        <div class="button-modais">
          <div class="listar-veiculos">
            <!-- INSERIR modal para listar os veiculos ja cadastradas-->
          </div>
          <div class="cad-modelo">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Cadastro Modelo</button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Cadastro de Modelo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="formulario" name="formulario">
                      <label for="" class="form-label">Informe a Marca:</label>
                      <input type="text" id="marca" placeholder="Marca" class="form-control">
                      <label for="" class="form-label">Informe o Modelo:</label>
                      <input type="text" id="modelo" placeholder="Modelo" class="form-control">
                      <label for="" class="form-label">Informe a Cor:</label>
                      <input type="text" id="cor" placeholder="Cor" class="form-control">
                      <label for="" class="form-label">Informe o Tipo "Sedan/Hatch":</label>
                      <select class="form-select" id="modelo-veiculo-modal" aria-label="Default select example">
                        <option selected>Escolha uma Opção</option>
                        <option value="1">Sedan</option>
                        <option value="2">Hatch</option>
                        <option value="3">Motocicleta*</option>
                      </select>
                      <button id="enviar" type="submit" class="btn btn-outline-secondary">Enviar</button>
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
        <div class="cad-veiculo">
          <form id="formulario" name="formulario">
            <label for="" class="form-label">Informe a placa do veiculo:</label>
            <input type="text" id="placa" placeholder="Placa" class="form-control">
            <label for="" class="form-label">Modelo do veiculo:</label>
            <select class="form-select" id="modelo-veiculo" aria-label="Default select example">
              <option selected>Escolha uma Opção</option>
              <option value="1">Fiat/Uno/Vermelho/Sedan</option>
              <option value="2">Fiat/Palio/Branco/Hatch</option>
              <option value="3">Ford/Focus/Preto/Hatch</option>
            </select>
            <label for="" class="form-label">Nome do Proprietário do Veiculo:</label>
            <select class="form-select" id="proprietario-veiculo" aria-label="Default select example">
              <option selected>Escolha uma Opção</option>
              <option value="1">Joao Carlos</option>
              <option value="2">Pedro Silva</option>
              <option value="3">Maria Santos</option>
            </select>
            <button id="enviar" type="submit" class="btn btn-outline-secondary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="rodape">
    <div class="container-fluid">
      <p> Desenvolvido por:</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>